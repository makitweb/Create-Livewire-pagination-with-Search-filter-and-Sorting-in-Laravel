<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Employees;

class EmpPagination extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $orderColumn = "emp_name";
    public $sortOrder = "asc";
    public $sortLink = '<i class="sorticon fa-solid fa-caret-up"></i>';
    public $searchTerm = "";

    public function updated(){
        $this->resetPage();
    }

    public function sortOrder($columnName = ""){
        $caretOrder = "up";
        if($this->sortOrder == 'asc'){
            $this->sortOrder = "desc";
            $caretOrder = "down";
        }else{
            $this->sortOrder = "asc";
            $caretOrder = "up";
        }
        $this->sortLink = '<i class="sorticon fa-solid fa-caret-'.$caretOrder.'"></i>';

        $this->orderColumn = $columnName;
    }

    public function render()
    {
        $employees = Employees::orderby($this->orderColumn,$this->sortOrder)->select('*');
        if(!empty($this->searchTerm)){
            $employees->orWhere('emp_name',"like","%".$this->searchTerm."%");
            $employees->orWhere('city',"like","%".$this->searchTerm."%");
        }
        $employees = $employees->paginate(10);

        return view('livewire.emp-pagination',[
            'employees' => $employees
        ]);
    }
}
