<?php

namespace App\Http\Controllers\admin;

use App\Mail\SenTestMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SettingController extends Controller
{

    public function smtp_settings(Request $request)
    {
        return view('admin.setting.smtp_settings');
    }

    public function env_key_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
                $this->overWriteEnvFile($type, $request[$type]);
        }
        return redirect()->route('smtp_settings.index');
    }
    public function overWriteEnvFile($type, $val)
    {
        if(env('DEMO_MODE') != 'On'){
            $path = base_path('.env');
            if (file_exists($path)) {
                $val = '"'.trim($val).'"';
                if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                    file_put_contents($path, str_replace(
                        $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                    ));
                }
                else{
                    file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
                }
            }
        }
    }
}
