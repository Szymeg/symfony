<?php

// src/Command/komenda.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class CommandClass extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:komenda';

    private function number($a) {
        $numbers = [];
        for($i=0; $i<=$a; $i++){
            if ($i < 2) {
                $numbers[] = $i;
            } 
            elseif ($i%2 == 0) {
                $x = $numbers[$i/2];
                $numbers[] = $x;
            } 
            else {
                $y = $numbers[($i-1)/2];
                $z = $numbers[($i+1)/2];
                $numbers[] = $y + $z;
            }
        }
        #printowanie ludzkich wartości, key-> index
        #print_r(array_values($numbers));
        #$key = array_search($value, $numbers);
        #echo $key;
        $value = max($numbers);
        return $value;
    }

    protected function configure()
    {
        $this
        // configure an argument
        ->addArgument('n', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        if ($input->getArgument('n') >= 1 and $input->getArgument('n') <= 99999 ) {
            $output->writeln('maksymalna wartość dla podanej niewiadomej to: '.$this->number($input->getArgument('n')));
        }
        else {
            $output->writeln('błąd, podaj liczbę w zakresie od 1 do 99999');
            
            return 1;
        }
        
        return 0;
    }
}
