@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard Employee Monitor</h1>
            </div>

        </div>

    </div>

</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Employee Total</span>
                        <span class="info-box-number">
                            {{ $employeeTotal }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Religion Total</span>
                        <span class="info-box-number">{{ $religionTotal }}</span>
                    </div>
                </div>
            </div>

            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Most Religion</span>
                        <span class="info-box-number"> {{ $mostReligion }}</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">User Total</span>
                        <span class="info-box-number">{{ $userTotal }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    var religionName = @json($religionName);
    var religionAmount = @json($religionAmount);
    

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: religionName,
            datasets: [{
                label: 'Employeer with this religion',
                data: religionAmount,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection