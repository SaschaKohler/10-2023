@php
    $viewModel = new \App\View\Model\InvoicePdfModel($template,$invoice);
    $viewSpecial = $viewModel->buildViewData();
    extract($viewSpecial,\EXTR_SKIP);
@endphp
<style>
html {
  -webkit-print-color-adjust: exact;
}
.inv-paper {
font-family: '{{ $template-> font }}', sans-serif;
}
.header {
width:100%;
border-bottom: 1px solid lightgray;
padding: 16px 10%;
margin:0;
display:flex;
justify-content: space-between;
}
.logo {
width: 30%;
font-size:8px;
}
.logo img {
border-radius: 6px;
width:100px;
}
.company {
width:30%;
font-size: 8px;
text-align: right;
}
.font-semibold {
font-weight: 600;
}
</style>

<div class="header inv-paper">
<div class="logo">
       <img src="{{ $base64 }}" />
 </div>
<div class="company">
<h2 class="font-semibold">{{ $company_name }}</h2>
                @if($company_address && $company_city && $company_state && $company_zip)
                    <p>{{ $company_address }}</p>
                    <p>{{ $company_city }}, {{ $company_state }} {{ $company_zip }}</p>
                    <p>{{ $company_country }}</p>
                @endif
 </div>

</div>
