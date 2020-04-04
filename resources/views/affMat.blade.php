@extends('index')

        @section('a')
        
<table class="table table-dark">
<thead>
<tr>
<th scope="col">code</th>
<th scope="col">Libelle</th>
<th scope="col">Coefficient</th>
</tr>
</thead>
<tbody>
@foreach($tab1 as $tab)
<?php
dd($tab);
?>
<tr>
<th scope="row">{{$tab['code']}}</th>
<td>{{$tab['Libelle']}}</td>
<td>{{$tab['Coefficient']}}</td>
</tr>

@endforeach
</tbody>
</table>

@endsection