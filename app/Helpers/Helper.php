<?php 

if(!function_exists('g')) {
	function g($name) {
	    return Request::get($name);
	}
}

if (! function_exists('UploadFile'))
{
    function UploadFile($name, $path = null) {
        if (empty($path)) {
            $date = date('Y-m');
            $path = 'uploads/'.$date;
        }else{
            $date = date('Y-m');
            $path = 'uploads/'.$path;
        }
        
        if (app('request')->hasFile($name)){
            $file = app('request')->file($name);
            // dd($file);
            $filename = $file->getClientOriginalName();
            $ext = strtolower($file->getClientOriginalExtension());
            
            if($filename && $ext) {
                Storage::makeDirectory($path);
                $destinationPath = public_path($path);
                $extension              = $ext;
                $names                  = strtolower(rand(00001,99999)).'.'.$extension;
                
                app('request')->file($name)->move($destinationPath, $names);
            }

            return $path.'/'.$names;
        }
    }
}

if (! function_exists('validationFailed'))
{
    function validationFailed($validator)
    {
        $result = [];
        if ($validator->fails()) 
        {
            $message = $validator->errors()->all();      
            $result['status'] = 400;
            $result['message'] = implode(', ',$message);      
            $res = response()->json($result);
            $res->send();
            exit;
        }    
    }
}

if (! function_exists('storeSession'))
{
    function storeSession($users)
    {
        $users = new stdClass();
        $users->id = $users->id;
        $users->name = $users->name;
        $users->photo = $users->photo;
        $users->email = $users->email;

        session(['users' => $users]);
    }
}   
if (! function_exists('getSessions'))
{
    function getSessions()
    {
        return Session::get('users');
    }
}
 ?>