@inject('date','App\Utilities\Date')

@if($date->isWeeckend())
       {{ "c'est le weekend"}}
       @else
       {{ "ce n'est pas le weekend mon gars va travailler "}}
       @endif