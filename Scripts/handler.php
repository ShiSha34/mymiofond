<?php

define('_COMPANY', 'aeqlmvgvlxcee');
define('_ZONE', 'ru');
define('_NAMESPACE', '_clients');
define('_CODE', '_leads');
define('_TOKEN', '2f3cf8e6-d375-4c90-a5c2-55090eda587d');

$input = $_POST['context'];

if (!empty($input)) {

    $funnel = '98fde1bc-3063-4a68-a280-9451442ab6f7';

    file_put_contents(__DIR__.'/data.log', $input."\n\n", FILE_APPEND); // LOG

    $form = json_decode($input, 1);
    $data = $form['context'];

    foreach ($data as $key => $value) {
        if (strpos($key, 'date')) {
            $date = DateTime::createFromFormat('d.m.Y', $value);
            $date = date_format($date,'c');
            $data[$key] = $date;
            continue;
        }

        if (strpos($key, 'phone')) {
            $phone = [
                'type' => 'main',
                'tel' => $value,
            ];

            $data[$key] = [
                $phone,
            ];

            continue;
        }

        if (strpos($key, 'mail')) {
            $mail = [
                'type' => 'main',
                'email' => $value,
            ];

            $data[$key] = [
                $mail,
            ];
        }
    };

    $postfields = [
        'context' => $data,
        'statusGroupId' => $funnel
    ];

    $postfields = json_encode($postfields);
    file_put_contents(__DIR__.'/data_out.log', $postfields."\n\n", FILE_APPEND); // LOG

    $URL = 'https://'._COMPANY.'.elma365.'._ZONE.'/pub/v1/app/'._NAMESPACE.'/'._CODE.'/create';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-Token: '._TOKEN, 'Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    $response = curl_exec($ch);

    print_r(json_encode($response));
    return;
}





$input = file_get_contents('php://input');

if(!empty($input)) {
	file_put_contents(__DIR__.'/data.log', $input."\n\n", FILE_APPEND); // LOG

	$form = json_decode($input, 1);
	$formID = $form['form_id'];
	$data = $form['form_submit_data'];

	switch ($formID) {
		case '41310':
			$funnel = '98fde1bc-3063-4a68-a280-9451442ab6f7';
			
			$mail = [
				'type' => 'main',
				'email' => $data['your-email']
			];
			
			$phone = [
				'type' => 'main',
				'tel' => $data['your-number']
			];
			
			$birtdate = DateTime::createFromFormat('d.m.Y',$data['date-birth']);
			
			$context = [
				'__name' => $data['parent-name'],
				'parent_fullname' => $data['parent-name'],
				'child_fullname' => $data['child-name'],
				'birthdate' => date_format($birtdate,'c'),
				'city' => $data['your-city'],
				'email' => [
				  $mail
				],
				'contact_phone' => [
				  $phone
				],
				'diagnos' => $data['diagnosis'],
				'description' => $data['your-condition']
			];
			break;
		
		default:
			die('Missing form_id');
			break;
	}

	$postfields = [
		'context' => $context,
		'statusGroupId' => $funnel
	];
	$postfields = json_encode($postfields);
	file_put_contents(__DIR__.'/data_out.log', $postfields."\n\n", FILE_APPEND); // LOG

	$URL = 'https://'._COMPANY.'.elma365.'._ZONE.'/pub/v1/app/'._NAMESPACE.'/'._CODE.'/create';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-Token: '._TOKEN, 'Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
	$response = curl_exec($ch);

	print_r($response);
}

 ?>