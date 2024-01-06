<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Generate PDF Example - ItSolutionStuff.com</title>
    <style>
    .page-break {
        page-break-after: always;
    }
    table.table-bordered > thead > tr > th{
      border:1px solid #a1a1a1;
      padding: 4px;
    }
    table.table-bordered > tbody > tr > td{
      border:1px solid #a1a1a1;
      padding: 4px;
    }
    .table{
        width: 100%;
    }
    </style>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<div>
    @foreach($users as $data)
        @include('invoices/components/table', ['data' => $data])
    @endforeach
</div>

</body>
</html>
