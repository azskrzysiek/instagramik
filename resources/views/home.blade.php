@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/d1db36f0d9ab1b61ed4aaafec84a12b1/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> fallowers</div>
                <div class="pr-5"><strong>212</strong> fallowing</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 pt-5">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/19783bacd52788d213a40c147d62dc3e/5D7056B0/t51.2885-15/sh0.08/e35/c0.99.912.912a/s640x640/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/19783bacd52788d213a40c147d62dc3e/5D7056B0/t51.2885-15/sh0.08/e35/c0.99.912.912a/s640x640/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/19783bacd52788d213a40c147d62dc3e/5D7056B0/t51.2885-15/sh0.08/e35/c0.99.912.912a/s640x640/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" class="w-100">
        </div>
    </div>
</div>
@endsection
