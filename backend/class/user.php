<?php

class User
{

    private int $user_id;
    private string $user_name;
    private string $user_mail;
    private string $user_gender;
    private string $user_location;
    private int $user_avatar;
    private string $user_role;

    public function __construct(
        int $id_user,
        string $name_user,
        string $mail_user,
        string $gender_user,
        string $location_user,
        int $avatar_user,
        string $role_user
    ) {
        $this->user_id = $id_user;
        $this->user_name = $name_user;
        $this->user_mail = $mail_user;
        $this->user_gender = $gender_user;
        $this->user_location = $location_user;
        $this->user_avatar = $avatar_user;
        $this->user_role = $role_user;
    }
    //getters
    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getUserName(): string
    {
        return $this->user_name;
    }
    public function getUserMail(): string
    {
        return $this->user_mail;
    }
    public function getUserGender(): string
    {
        return $this->user_gender;
    }
    public function getUserLocation(): string
    {
        return $this->user_location;
    }
    public function getUserAvatar(): int
    {
        return $this->user_avatar;
    }
    public function getUserRole(): string
    {
        return $this->user_role;
    }
}
