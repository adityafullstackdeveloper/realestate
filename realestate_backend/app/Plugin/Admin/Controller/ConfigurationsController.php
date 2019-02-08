<?php
class ConfigurationsController extends AdminAppController {
    public $helpers = array('Html','Form','Session');
    public $components = array('Session','search-master.Prg');    
    public function index()
    {
        $this->loadModel('Currency');
        $this->set('allcurrency',$this->Currency->find('list',array('fields'=>array('photo','name'))));
        $timezones = array(
                            'Pacific/Midway'        => "(GMT-11:00) Midway Island",
                            'Pacific/Apia'         => "(GMT-11:00) Samoa",
                            'Pacific/Honolulu'     => "(GMT-10:00) Hawaii",
                            'America/Anchorage'    => "(GMT-09:00) Alaska",
                            'America/Los_Angeles'  => "(GMT-08:00) Pacific Time (US & Canada)",
                            'America/Tijuana'      => "(GMT-08:00) Tijuana",
                            'America/Phoenix'      => "(GMT-07:00) Arizona",
                            'America/Denver'       => "(GMT-07:00) Mountain Time (US & Canada)",
                            'America/Chihuahua'    => "(GMT-07:00) Chihuahua",
                            'America/Mazatlan'     => "(GMT-07:00) Mazatlan",
                            'America/Mexico_City'  => "(GMT-06:00) Mexico City",
                            'America/Monterrey'    => "(GMT-06:00) Monterrey",
                            'Canada/Saskatchewan'  => "(GMT-06:00) Saskatchewan",
                            'America/Chicago'      => "(GMT-06:00) Central Time (US & Canada)",
                            'America/New_York'     => "(GMT-05:00) Eastern Time (US & Canada)",
                            'America/Indiana/Indianapolis'      => "(GMT-05:00) Indiana (East)",
                            'America/Bogota'       => "(GMT-05:00) Bogota",
                            'America/Lima'         => "(GMT-05:00) Lima",
                            'America/Caracas'      => "(GMT-04:30) Caracas",
                            'Canada/Atlantic'      => "(GMT-04:00) Atlantic Time (Canada)",
                            'America/La_Paz'       => "(GMT-04:00) La Paz",
                            'America/Santiago'     => "(GMT-04:00) Santiago",
                            'Canada/Newfoundland'  => "(GMT-03:30) Newfoundland",
                            'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
                            'America/Godthab'      => "(GMT-03:00) Greenland",
                            'Atlantic/Stanley'     => "(GMT-02:00) Stanley",
                            'Atlantic/Azores'      => "(GMT-01:00) Azores",
                            'Atlantic/Cape_Verde'  => "(GMT-01:00) Cape Verde Is.",
                            'Africa/Casablanca'    => "(GMT) Casablanca",
                            'Europe/Dublin'        => "(GMT) Dublin",
                            'Europe/Lisbon'        => "(GMT) Lisbon",
                            'Europe/London'        => "(GMT) London",
                            'Africa/Monrovia'      => "(GMT) Monrovia",
                            'Europe/Amsterdam'     => "(GMT+01:00) Amsterdam",
                            'Europe/Belgrade'      => "(GMT+01:00) Belgrade",
                            'Europe/Berlin'        => "(GMT+01:00) Berlin",
                            'Europe/Bratislava'    => "(GMT+01:00) Bratislava",
                            'Europe/Brussels'      => "(GMT+01:00) Brussels",
                            'Europe/Budapest'      => "(GMT+01:00) Budapest",
                            'Europe/Copenhagen'    => "(GMT+01:00) Copenhagen",
                            'Europe/Ljubljana'     => "(GMT+01:00) Ljubljana",
                            'Europe/Madrid'        => "(GMT+01:00) Madrid",
                            'Europe/Paris'         => "(GMT+01:00) Paris",
                            'Europe/Prague'        => "(GMT+01:00) Prague",
                            'Europe/Rome'          => "(GMT+01:00) Rome",
                            'Europe/Sarajevo'      => "(GMT+01:00) Sarajevo",
                            'Europe/Skopje'        => "(GMT+01:00) Skopje",
                            'Europe/Stockholm'     => "(GMT+01:00) Stockholm",
                            'Europe/Vienna'        => "(GMT+01:00) Vienna",
                            'Europe/Warsaw'        => "(GMT+01:00) Warsaw",
                            'Europe/Zagreb'        => "(GMT+01:00) Zagreb",
                            'Europe/Athens'        => "(GMT+02:00) Athens",
                            'Europe/Bucharest'     => "(GMT+02:00) Bucharest",
                            'Africa/Cairo'         => "(GMT+02:00) Cairo",
                            'Africa/Harare'        => "(GMT+02:00) Harare",
                            'Europe/Helsinki'      => "(GMT+02:00) Helsinki",
                            'Europe/Istanbul'      => "(GMT+02:00) Istanbul",
                            'Asia/Jerusalem'       => "(GMT+02:00) Jerusalem",
                            'Europe/Kiev'          => "(GMT+02:00) Kyiv",
                            'Europe/Minsk'         => "(GMT+02:00) Minsk",
                            'Europe/Riga'          => "(GMT+02:00) Riga",
                            'Europe/Sofia'         => "(GMT+02:00) Sofia",
                            'Europe/Tallinn'       => "(GMT+02:00) Tallinn",
                            'Europe/Vilnius'       => "(GMT+02:00) Vilnius",
                            'Asia/Baghdad'         => "(GMT+03:00) Baghdad",
                            'Asia/Kuwait'          => "(GMT+03:00) Kuwait",
                            'Africa/Nairobi'       => "(GMT+03:00) Nairobi",
                            'Asia/Riyadh'          => "(GMT+03:00) Riyadh",
                            'Asia/Tehran'          => "(GMT+03:30) Tehran",
                            'Europe/Moscow'        => "(GMT+04:00) Moscow",
                            'Asia/Baku'            => "(GMT+04:00) Baku",
                            'Europe/Volgograd'     => "(GMT+04:00) Volgograd",
                            'Asia/Muscat'          => "(GMT+04:00) Muscat",
                            'Asia/Tbilisi'         => "(GMT+04:00) Tbilisi",
                            'Asia/Yerevan'         => "(GMT+04:00) Yerevan",
                            'Asia/Kabul'           => "(GMT+04:30) Kabul",
                            'Asia/Karachi'         => "(GMT+05:00) Islamabad, Karachi",
                            'Asia/Tashkent'        => "(GMT+05:00) Tashkent",
                            'Asia/Kolkata'         => "(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi",
                            'Asia/Kathmandu'       => "(GMT+05:45) Kathmandu",
                            'Asia/Yekaterinburg'   => "(GMT+06:00) Ekaterinburg",
                            'Asia/Almaty'          => "(GMT+06:00) Almaty",
                            'Asia/Dhaka'           => "(GMT+06:00) Dhaka",
                            'Asia/Novosibirsk'     => "(GMT+07:00) Novosibirsk",
                            'Asia/Bangkok'         => "(GMT+07:00) Bangkok",
                            'Asia/Jakarta'         => "(GMT+07:00) Jakarta",
                            'Asia/Krasnoyarsk'     => "(GMT+08:00) Krasnoyarsk",
                            'Asia/Chongqing'       => "(GMT+08:00) Chongqing",
                            'Asia/Hong_Kong'       => "(GMT+08:00) Hong Kong",
                            'Asia/Kuala_Lumpur'    => "(GMT+08:00) Kuala Lumpur",
                            'Australia/Perth'      => "(GMT+08:00) Perth",
                            'Asia/Singapore'       => "(GMT+08:00) Singapore",
                            'Asia/Taipei'          => "(GMT+08:00) Taipei",
                            'Asia/Ulaanbaatar'     => "(GMT+08:00) Ulaan Bataar",
                            'Asia/Urumqi'          => "(GMT+08:00) Urumqi",
                            'Asia/Irkutsk'         => "(GMT+09:00) Irkutsk",
                            'Asia/Seoul'           => "(GMT+09:00) Seoul",
                            'Asia/Tokyo'           => "(GMT+09:00) Tokyo",
                            'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
                            'Australia/Darwin'     => "(GMT+09:30) Darwin",
                            'Asia/Yakutsk'         => "(GMT+10:00) Yakutsk",
                            'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
                            'Australia/Canberra'   => "(GMT+10:00) Canberra",
                            'Pacific/Guam'         => "(GMT+10:00) Guam",
                            'Australia/Hobart'     => "(GMT+10:00) Hobart",
                            'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
                            'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
                            'Australia/Sydney'     => "(GMT+10:00) Sydney",
                            'Asia/Vladivostok'     => "(GMT+11:00) Vladivostok",
                            'Asia/Magadan'         => "(GMT+12:00) Magadan",
                            'Pacific/Auckland'     => "(GMT+12:00) Auckland",
                            'Pacific/Fiji'         => "(GMT+12:00) Fiji"
                            );
        $id=1;        
        $post = $this->Configuration->findById($id); 
        if ($this->request->is('post'))
        {
            $this->Configuration->id = $id;
            try
            {
                $oldtz="date_default_timezone_set('".$post['Configuration']['timezone']."');";
                if ($this->Configuration->save($this->request->data))
                {
                    $file = new File(APP.'/Config/core.php',false,777);
                    $tmz="date_default_timezone_set('".$this->request->data['Configuration']['timezone']."');";
                    $file->replaceText($oldtz,$tmz);
                    $file->close();
                    $this->Session->setFlash('Your Setting has been saved.','flash',array('alert'=>'success'));
                    return $this->redirect(array('action' => 'index'));
                }
            }
            catch (Exception $e)
            {
                $this->Session->setFlash('Setting Problem.','flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));
            }
        }
        if (!$this->request->data)
        {
            $this->request->data = $post;
        }
        $this->set('timezones',$timezones);
    }    
}
?>