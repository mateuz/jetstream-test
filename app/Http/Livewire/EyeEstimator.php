<?php

namespace App\Http\Livewire;



use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Classe;
use App\Models\ClassesUser;
use App\Models\SnpsUser;

use Log;

class EyeEstimator extends Component
{
    public $title = "Eye Three Colors";
    public $description = "Com uma lista de variantes 6 a 10 (SNP) comum para todas as pessoas, apresentamos a predição de coloração de olho comum com 3 classes - Azul, Verde e Marrom. A predição é representada na forma de porcentagem de certeza para cada uma das classes.";

    public $count = 10;
    public $loud = false;

    public $name = 'Jelly';
    public $greeting = 'Hello';

    public $user_id = '';
    public $snps;

    public $data = array(
        1 => array (
            'snp' => 'rs6119471',
            'genotype' => 'GG',
            'gene' => 'ASIP'
        ),
        2 => array (
            'snp' => 'rs11230664',
            'genotype' => 'CC',
            'gene' => 'DDB1'
        ),
        3 => array (
            'snp' => 'rs1129038',
            'genotype' => 'CC',
            'gene' => 'HERC2'
        ),
        4 => array (
            'snp' => 'rs12913832',
            'genotype' => 'GG',
            'gene' => 'HERC2'
        ),
        5 => array (
            'snp' => 'rs6497271',
            'genotype' => 'GG',
            'gene' => 'HERC2'
        ),
        6 => array (
            'snp' => 'rs10424065',
            'genotype' => 'CC',
            'gene' => 'MFSD12'
        ),
        7 => array (
            'snp' => 'rs6510760',
            'genotype' => 'AA',
            'gene' => 'MFSD12'
        ),
        8 => array (
            'snp' => 'rs1800407',
            'genotype' => 'CC',
            'gene' => 'OCA2'
        ),
        9 => array (
            'snp' => 'rs1426654',
            'genotype' => 'AA',
            'gene' => 'SLC24A5'
        ),
        10 => array (
            'snp' => 'rs2402130',
            'genotype' => 'AA',
            'gene' => 'SLC24A4'
        )
    );

    /**
     * Lifecycle Hooks
     *
     * mount, hydrate, updating, updated
     * updatedName
     *
     */
    // first requests always call this one
    public function mount()
    {
        $this->count = 0;
        $this->user_id = Auth::user()->id;
        // $this->class = ClassesUser::where('user_id', $this->user_id)->where('class_id', '2')->get();
        // $this->class->load('class', 'class.snps', 'user.snps');
        // dd($this->class);
        $this->snps = SnpsUser::where('user_id', $this->user_id)->get();
    }

    // any subsequent request call this one
    public function hydrate()
    {
        $this->loud = true;
    }

    public function increment()
    {
        $this->count++;
        Log::info('Showing counter: '.$this->count);
    }

    public function render()
    {
        return view('livewire.eye-estimator');
    }
}
