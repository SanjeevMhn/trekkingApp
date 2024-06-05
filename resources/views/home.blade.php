<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trekking App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials/header')

    <div class="hero-section has-back-img">
        <div class="wrapper">
            <h2 class="header-text">
                Your travel companion, here to help
            </h2>
            <form action="" method="post" class="custom-form">
                <div class="form-row flow-layout">
                    <div class="form-group">
                        <select name="activity" id="" class="form-control">
                            <option value="default">Choose an Activity</option>
                            <option value="">Trekking</option>
                            <option value="">Trial Walking</option>
                            <option value="">Biking</option>
                            <option value="">Mountaineering</option>
                            <option value="">City Visit</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <select name="location" id="" class="form-control">
                            <option value="default">Choose a location</option>
                            <option value="">Pokhara</option>
                            <option value="">Annapurna</option>
                            <option value="">Chitwan</option>
                            <option value="">Kathmandu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" name="search-location" id="" class="form-control"
                            placeholder="Date of arrival">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <img class="back-img" src="{{asset('assets/images/hero.jpg')}}" alt="">
    </div>

</body>

</html>
