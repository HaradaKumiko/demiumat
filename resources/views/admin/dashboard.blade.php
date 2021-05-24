@extends('layouts.master')
@section('title' , 'Dashboard')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-flud">  
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">
                                        <span> Welcome to {{config('web_config')['WEB_TITLE']}} </span>
                                    </li>
                                </ol>
                            </p>
					    </div>
                </div>
         </div>
    </div>
</div>
@endsection
