<?php

class User
{

    private int $user_id;
    private string $user_name;
    private string $user_mail;
    private string $user_gender;
    /////////A COMPLETER//////////////


    public function __construct(int $id_user, string $name_user, string $mail_user, string $gender_user,)
    {
        $this->user_id = $id_user;
        $this->user_name = $name_user;
        $this->user_mail = $mail_user;
        $this->user_gender = $gender_user;
    }
    //getters
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getUserName()
    {
        return $this->user_name;
    }
    public function getUserMail()
    {
        return $this->user_mail;
    }
    public function getUserGender()
    {
        return $this->user_gender;
    }
}
