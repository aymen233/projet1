@extends('index')

        @section('b')
        
<table class="table table-dark">
<thead>
<tr>
<th scope="col">Date</th>
<th scope="col">Lieu</th>
<th scope="col">Code</th>
</tr>
</thead>
<tbody>
@foreach($tab2 as $tab)
<tr>
<th scope="row">{{$tab['Date']}}</th>
<td>{{$tab['Lieu']}}</td>
<td>{{$tab['Code']}}</td>
</tr>

@endforeach
</tbody>
</table>

@endsection