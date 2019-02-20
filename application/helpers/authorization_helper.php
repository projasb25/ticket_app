<?php
class AUTHORIZATION
{
    public static function validateTimestamp($token)
    {
        $CI =& get_instance();
        $now = date('Y-m-d H:i:s');
        $token = self::validateToken($token);
        date_default_timezone_set('America/Lima');
		$now = new DateTime("now");
		$datetime2 = date_create($token->timestamp);
		$interval = $now->diff($datetime2);
		$minutes = $interval->days * 24 * 60;
		$minutes += $interval->h * 60;
		$minutes += $interval->i;
        if ($token != false && ($minutes < ($CI->config->item('token_timeout')))) {
            return $token;
        }
        return false;
    }
    public static function validateToken($token)
    {
        $CI =& get_instance();
        return JWT::decode($token, $CI->config->item('jwt_key'));
    }
    public static function generateToken($data)
    {
        $CI =& get_instance();
        return JWT::encode($data, $CI->config->item('jwt_key'));
    }
}