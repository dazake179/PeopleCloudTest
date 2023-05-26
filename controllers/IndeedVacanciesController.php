<?php

class IndeedVacanciesController
{
    private static $instance;
    
    private function __construct() { }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new IndeedVacanciesController();
        }
        return self::$instance;
    }
    
    public function getVacancies()
    {
        $xmlString = file_get_contents('https://people-pro.com/xml-feed/indeed');
        $xml = new SimpleXMLElement($xmlString);
        $data = [];
        foreach ($xml->job as $job) {
            $data[] = [
                'company' => (string)$job->company,
                'title' => (string)$job->title,
                'date' => (string)$job->date,
                'city' => (string)$job->city,
                'state' => (string)$job->state,
                'country' => (string)$job->country,
                'description' => nl2br((string)$job->description),
                'url' => (string)$job->url
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

$indeedVacancies = IndeedVacanciesController::getInstance();
$vacancies = $indeedVacancies->getVacancies();
?>