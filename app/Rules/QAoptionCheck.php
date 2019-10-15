<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class QAoptionCheck implements Rule
{
    public function passes($attribute, $value)
    {
        if (!empty($value)){
            $datas = explode(",",$value);
            if (count($datas)>1){
                foreach ($datas as $data){
                    if (count(array_keys($datas,$data)) > 1)
                    {
                        $rt = true;
                        break;
                    }else{
                        $rt = false;
                    }
                }
                if ($rt){
                    return false;
                }else{
                    return true;
                }
            }
        }else{
            return true;
        }
    }

    public function message()
    {
        return 'The :attribute content cannot be repeated.';
    }
}
