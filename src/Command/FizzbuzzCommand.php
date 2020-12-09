<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Util\FizzBuzz;

class FizzbuzzCommand extends Command
{
    protected static $defaultName = 'app:fizzbuzz';

    protected function configure()
    {
        $this
            ->setDescription('Test de FizzBuzz')
            ->addOption('min',null, InputOption::VALUE_OPTIONAL, 'El valor minimo de la data de prueba',1)
            ->addOption('max',null, InputOption::VALUE_OPTIONAL, 'El valor maximo de la data de prueba',100)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
		
		$minOptionValue = $input->getOption('min');
		$maxOptionValue = $input->getOption('max');
        $min = $minOptionValue === false || $minOptionValue === null ? 1 : $minOptionValue;
        $max = $maxOptionValue === false || $maxOptionValue === null ? 100 : $maxOptionValue;
		
		if($min < 1){
			$io->note("El valor minimo no puede ser menor que 1");
			return Command::FAILURE;
		}else if($max > 100){
			$io->note("El valor maximo no puede ser mayor que 100");
			return Command::FAILURE;
		}else if($min > $max){
			$io->note("El valor minimo no puede ser mayor que el valor maximo");
			return Command::FAILURE;
		}else{
			$output->writeln([
        'FizzBuzz Test',
        '============',
        'Rango ' .$min. '|'. $max,
        ]);
		
		$fizzBuzz = new FizzBuzz();
		$data = $fizzBuzz->getData($min, $max);
		foreach($data as $key => $number){
            $output->writeln('Number '.$number.': '.$fizzBuzz->printData($number));
        }
		}
        $io->success('The command FizzBuzz ended successfully.');
        return Command::SUCCESS;
    }
}