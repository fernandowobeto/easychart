<?php 

include "autoload.php";


use Wobeto\EasyChart\LineChart;
use Wobeto\EasyChart\Model\XYDataSet;
use Wobeto\EasyChart\Model\XYSeriesDataSet;
use Wobeto\EasyChart\Model\Point;


$chart = new LineChart(450, 250);

$serie1 = new XYDataSet();

$serie1->addPoint(new Point("18-24", 22));
$serie1->addPoint(new Point("25-34", 17));
$serie1->addPoint(new Point("35-44", 20));
$serie1->addPoint(new Point("45-54", 25));

$serie2 = new XYDataSet();
$serie2->addPoint(new Point("18-24", 13));
$serie2->addPoint(new Point("25-34", 18));
$serie2->addPoint(new Point("35-44", 23));
$serie2->addPoint(new Point("45-54", 22));

$dataSet = new XYSeriesDataSet();
$dataSet->addSerie("Male", $serie1);
$dataSet->addSerie("Female", $serie2);
$chart->setDataSet($dataSet);

$chart->setTitle("Firefox vs IE users: Age");
echo $chart->render();