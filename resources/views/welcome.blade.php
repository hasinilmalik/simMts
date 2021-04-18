<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>MTSMU 2 BAKID</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }

    </style>
    <style>
        body {
            margin-top: 20px;
            background-color: #f0f6ff;
        }


        /*timeline*/

        a {
            text-decoration: none
        }


        /*h4{text-align:center;margin:30px 0;color:#444}*/

        .main-timeline {
            position: relative
        }

        .main-timeline:before {
            content: "";
            width: 5px;
            height: 100%;
            border-radius: 20px;
            margin: 0 auto;
            background: #242922;
            position: absolute;
            top: 0;
            left: 0;
            right: 0
        }

        .main-timeline .timeline {
            display: inline-block;
            margin-bottom: 50px;
            position: relative
        }

        .main-timeline .timeline:before {
            content: "";
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 4px solid #fff;
            background: #D81159;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            transform: translate(-50%, -50%)
        }

        .main-timeline .timeline-icon {
            display: inline-block;
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #D81159;
            padding: 13px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translateY(-50%)
        }

        .main-timeline .timeline-icon i {
            display: block;
            border-radius: 50%;
            background: #D81159;
            font-size: 64px;
            color: #fff;
            line-height: 100px;
            z-index: 1;
            position: relative
        }

        .main-timeline .timeline-icon:after,
        .main-timeline .timeline-icon:before {
            content: "";
            width: 100px;
            height: 4px;
            background: #D81159;
            position: absolute;
            top: 50%;
            right: -100px;
            transform: translateY(-50%)
        }

        .main-timeline .timeline-icon:after {
            width: 70px;
            height: 50px;
            background: #f0f6ff;
            top: 89px;
            right: -30px
        }

        .main-timeline .timeline-content {
            width: 50%;
            padding: 0 50px;
            margin: 52px 0 0;
            float: right;
            position: relative
        }

        .main-timeline .timeline-content:before {
            content: "";
            width: 70%;
            height: 100%;
            border: 3px solid #D81159;
            border-top: none;
            border-right: none;
            position: absolute;
            bottom: -13px;
            left: 35px
        }

        .main-timeline .timeline-content:after {
            content: "";
            width: 37px;
            height: 3px;
            background: #D81159;
            position: absolute;
            top: 13px;
            left: 0
        }

        .main-timeline .title {
            font-size: 20px;
            color: #D81159;
            text-transform: uppercase;
            margin: 0 0 5px
        }

        .main-timeline .description {
            display: inline-block;
            color: #404040;
            line-height: 20px;
            margin: 0
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            left: auto;
            right: 30%
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon:before {
            right: auto;
            left: -100px
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon:after {
            right: auto;
            left: -30px
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            float: left
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            left: auto;
            right: 35px;
            transform: rotateY(180deg)
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:after {
            left: auto;
            right: 0
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content:after,
        .main-timeline .timeline:nth-child(2n) .timeline-icon i,
        .main-timeline .timeline:nth-child(2n) .timeline-icon:before,
        .main-timeline .timeline:nth-child(2n):before {
            background: #F68657
        }

        .main-timeline .timeline:nth-child(2n) .timeline-icon {
            border-color: #F68657
        }

        .main-timeline .timeline:nth-child(2n) .title {
            color: #F68657
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content:before {
            border-left-color: #F68657;
            border-bottom-color: #F68657
        }

        .main-timeline .timeline:nth-child(3n) .timeline-content:after,
        .main-timeline .timeline:nth-child(3n) .timeline-icon i,
        .main-timeline .timeline:nth-child(3n) .timeline-icon:before,
        .main-timeline .timeline:nth-child(3n):before {
            background: #8fb800
        }

        .main-timeline .timeline:nth-child(3n) .timeline-icon {
            border-color: #8fb800
        }

        .main-timeline .timeline:nth-child(3n) .title {
            color: #8fb800
        }

        .main-timeline .timeline:nth-child(3n) .timeline-content:before {
            border-left-color: #8fb800;
            border-bottom-color: #8fb800
        }

        .main-timeline .timeline:nth-child(4n) .timeline-content:after,
        .main-timeline .timeline:nth-child(4n) .timeline-icon i,
        .main-timeline .timeline:nth-child(4n) .timeline-icon:before,
        .main-timeline .timeline:nth-child(4n):before {
            background: #2fcea5
        }

        .main-timeline .timeline:nth-child(4n) .timeline-icon {
            border-color: #2fcea5
        }

        .main-timeline .timeline:nth-child(4n) .title {
            color: #2fcea5
        }

        .main-timeline .timeline:nth-child(4n) .timeline-content:before {
            border-left-color: #2fcea5;
            border-bottom-color: #2fcea5
        }

        @media only screen and (max-width:1200px) {
            .main-timeline .timeline-icon:before {
                width: 50px;
                right: -50px
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon:before {
                right: auto;
                left: -50px
            }

            .main-timeline .timeline-content {
                margin-top: 75px
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline .timeline {
                margin: 0 0 10px
            }

            .main-timeline .timeline-icon {
                left: 25%
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon {
                right: 25%
            }

            .main-timeline .timeline-content {
                margin-top: 115px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline {
                padding-top: 50px
            }

            .main-timeline:before {
                left: 80px;
                right: 0;
                margin: 0
            }

            .main-timeline .timeline {
                margin-bottom: 70px
            }

            .main-timeline .timeline:before {
                top: 0;
                left: 83px;
                right: 0;
                margin: 0
            }

            .main-timeline .timeline-icon {
                width: 60px;
                height: 60px;
                line-height: 40px;
                padding: 5px;
                top: 0;
                left: 0
            }

            .main-timeline .timeline:nth-child(even) .timeline-icon {
                left: 0;
                right: auto
            }

            .main-timeline .timeline-icon:before,
            .main-timeline .timeline:nth-child(even) .timeline-icon:before {
                width: 25px;
                left: auto;
                right: -25px
            }

            .main-timeline .timeline-icon:after,
            .main-timeline .timeline:nth-child(even) .timeline-icon:after {
                width: 25px;
                height: 30px;
                top: 44px;
                left: auto;
                right: -5px
            }

            .main-timeline .timeline-icon i {
                font-size: 30px;
                line-height: 45px
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(even) .timeline-content {
                width: 100%;
                margin-top: -15px;
                padding-left: 130px;
                padding-right: 5px
            }

            .main-timeline .timeline:nth-child(even) .timeline-content {
                float: right
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                width: 50%;
                left: 120px
            }

            .main-timeline .timeline:nth-child(even) .timeline-content:before {
                right: auto;
                transform: rotateY(0)
            }

            .main-timeline .timeline-content:after,
            .main-timeline .timeline:nth-child(even) .timeline-content:after {
                left: 85px
            }
        }

        @media only screen and (max-width:479px) {

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(2n) .timeline-content {
                padding-left: 110px
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(2n) .timeline-content:before {
                left: 99px
            }

            .main-timeline .timeline-content:after,
            .main-timeline .timeline:nth-child(2n) .timeline-content:after {
                left: 65px
            }
        }


        /*timeline2*/


        /******************* Timeline Demo - 4 *****************/

        .main-timeline2 {
            overflow: hidden;
            position: relative
        }

        .main-timeline2:before {
            content: "";
            width: 5px;
            height: 70%;
            background: #333;
            position: absolute;
            top: 70px;
            left: 50%;
            transform: translateX(-50%)
        }

        .main-timeline2 .timeline-content:before,
        .main-timeline2 .timeline:before {
            top: 50%;
            transform: translateY(-50%);
            content: ""
        }

        .main-timeline2 .timeline {
            width: 50%;
            padding-left: 100px;
            float: right;
            position: relative
        }

        .main-timeline2 .timeline:before {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #fff;
            border: 5px solid #333;
            position: absolute;
            left: -10px
        }

        .main-timeline2 .timeline-content {
            display: block;
            padding-left: 150px;
            position: relative
        }

        .main-timeline2 .timeline-content:before {
            width: 90px;
            height: 10px;
            border-top: 7px dotted #333;
            position: absolute;
            left: -92px
        }

        .main-timeline2 .year {
            display: inline-block;
            width: 120px;
            height: 120px;
            line-height: 100px;
            border-radius: 50%;
            border: 10px solid #f54957;
            font-size: 30px;
            color: #f54957;
            text-align: center;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, .4);
            position: absolute;
            top: 0;
            left: 0
        }

        .main-timeline2 .year:before {
            content: "";
            border-left: 20px solid #f54957;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            position: absolute;
            bottom: -13px;
            right: 0;
            transform: rotate(45deg)
        }

        .main-timeline2 .inner-content {
            padding: 20px 0
        }

        .main-timeline2 .title {
            font-size: 24px;
            color: #f54957;
            text-transform: uppercase;
            margin: 0 0 5px
        }

        .main-timeline2 .description {
            font-size: 14px;
            color: #6f6f6f;
            margin: 0 0 5px
        }

        .main-timeline2 .timeline:nth-child(2n) {
            padding: 0 100px 0 0
        }

        .main-timeline2 .timeline:nth-child(2n) .timeline-content:before,
        .main-timeline2 .timeline:nth-child(2n) .year,
        .main-timeline2 .timeline:nth-child(2n):before {
            left: auto;
            right: -10px
        }

        .main-timeline2 .timeline:nth-child(2n) .timeline-content {
            padding: 0 150px 0 0
        }

        .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
            right: -92px
        }

        .main-timeline2 .timeline:nth-child(2n) .year {
            right: 0
        }

        .main-timeline2 .timeline:nth-child(2n) .year:before {
            right: auto;
            left: 0;
            border-left: none;
            border-right: 20px solid #f54957;
            transform: rotate(-45deg)
        }

        .main-timeline2 .timeline:nth-child(2) {
            margin-top: 110px
        }

        .main-timeline2 .timeline:nth-child(odd) {
            margin: -110px 0 0
        }

        .main-timeline2 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline2 .timeline:first-child,
        .main-timeline2 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline2 .timeline:nth-child(2n) .year {
            border-color: #1ebad0;
            color: #1ebad0
        }

        .main-timeline2 .timeline:nth-child(2) .year:before {
            border-right-color: #1ebad0
        }

        .main-timeline2 .timeline:nth-child(2n) .title {
            color: #1ebad0
        }

        .main-timeline2 .timeline:nth-child(3n) .year {
            border-color: #7cba01;
            color: #7cba01
        }

        .main-timeline2 .timeline:nth-child(3) .year:before {
            border-left-color: #7cba01
        }

        .main-timeline2 .timeline:nth-child(3n) .title {
            color: #7cba01
        }

        .main-timeline2 .timeline:nth-child(4n) .year {
            border-color: #f8781f;
            color: #f8781f
        }

        .main-timeline2 .timeline:nth-child(4) .year:before {
            border-right-color: #f8781f
        }

        .main-timeline2 .timeline:nth-child(4n) .title {
            color: #f8781f
        }

        @media only screen and (max-width:1200px) {
            .main-timeline2 .year {
                top: 50%;
                transform: translateY(-50%)
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline2 .timeline {
                padding-left: 75px
            }

            .main-timeline2 .timeline:nth-child(2n) {
                padding: 0 75px 0 0
            }

            .main-timeline2 .timeline-content {
                padding-left: 130px
            }

            .main-timeline2 .timeline:nth-child(2n) .timeline-content {
                padding: 0 130px 0 0
            }

            .main-timeline2 .timeline-content:before {
                width: 68px;
                left: -68px
            }

            .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
                right: -68px
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline2 {
                overflow: visible
            }

            .main-timeline2:before {
                height: 100%;
                top: 0;
                left: 0;
                transform: translateX(0)
            }

            .main-timeline2 .timeline:before,
            .main-timeline2 .timeline:nth-child(2n):before {
                top: 60px;
                left: -9px;
                transform: translateX(0)
            }

            .main-timeline2 .timeline,
            .main-timeline2 .timeline:nth-child(even),
            .main-timeline2 .timeline:nth-child(odd) {
                width: 100%;
                float: none;
                text-align: center;
                padding: 0;
                margin: 0 0 10px
            }

            .main-timeline2 .timeline-content,
            .main-timeline2 .timeline:nth-child(2n) .timeline-content {
                padding: 0
            }

            .main-timeline2 .timeline-content:before,
            .main-timeline2 .timeline:nth-child(2n) .timeline-content:before {
                display: none
            }

            .main-timeline2 .timeline:nth-child(2n) .year,
            .main-timeline2 .year {
                position: relative;
                transform: translateY(0)
            }

            .main-timeline2 .timeline:nth-child(2n) .year:before,
            .main-timeline2 .year:before {
                border: none;
                border-right: 20px solid #f54957;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
                top: 50%;
                left: -23px;
                bottom: auto;
                right: auto;
                transform: rotate(0)
            }

            .main-timeline2 .timeline:nth-child(2n) .year:before {
                border-right-color: #1ebad0
            }

            .main-timeline2 .timeline:nth-child(3n) .year:before {
                border-right-color: #7cba01
            }

            .main-timeline2 .timeline:nth-child(4n) .year:before {
                border-right-color: #f8781f
            }

            .main-timeline2 .inner-content {
                padding: 10px
            }
        }


        /*timeline3*/


        /******************* Timeline Demo - 5 *****************/

        .main-timeline3 {
            overflow: hidden;
            position: relative
        }

        .main-timeline3 .timeline {
            position: relative;
            margin-top: -79px
        }

        .main-timeline3 .timeline:first-child {
            margin-top: 0
        }

        .main-timeline3 .timeline-icon,
        .main-timeline3 .year {
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .main-timeline3 .timeline:after,
        .main-timeline3 .timeline:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline3 .timeline:before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2
        }

        .main-timeline3 .timeline-icon {
            width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 25px solid transparent;
            border-top-color: #f44556;
            border-right-color: #f44556;
            z-index: 1;
            transform: rotate(45deg)
        }

        .main-timeline3 .year {
            display: block;
            width: 110px;
            height: 110px;
            line-height: 110px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, .4);
            font-size: 30px;
            font-weight: 700;
            color: #f44556;
            text-align: center;
            transform: rotate(-45deg)
        }

        .main-timeline3 .timeline-content {
            width: 35%;
            float: right;
            background: #f44556;
            padding: 30px 20px;
            margin: 50px 0;
            box-shadow: 0 10px 25px -10px rgba(72, 29, 99, .3);
            z-index: 1;
            position: relative
        }

        .main-timeline3 .timeline-content:before {
            content: "";
            width: 20%;
            height: 15px;
            background: #f44556;
            position: absolute;
            top: 50%;
            left: -20%;
            z-index: -1;
            transform: translateY(-50%)
        }

        .main-timeline3 .title {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin: 0 0 10px
        }

        .main-timeline3 .description {
            font-size: 16px;
            color: #fff;
            line-height: 24px;
            margin: 0
        }

        .main-timeline3 .timeline:nth-child(2n) .timeline-icon {
            transform: rotate(-135deg);
            border-top-color: #e97e2e;
            border-right-color: #e97e2e
        }

        .main-timeline3 .timeline:nth-child(2n) .year {
            transform: rotate(135deg);
            color: #e97e2e
        }

        .main-timeline3 .timeline:nth-child(2n) .timeline-content {
            float: left
        }

        .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
            left: auto;
            right: -20%
        }

        .main-timeline3 .timeline:nth-child(2n) .timeline-content,
        .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
            background: #e97e2e
        }

        .main-timeline3 .timeline:nth-child(3n) .timeline-icon {
            border-top-color: #13afae;
            border-right-color: #13afae
        }

        .main-timeline3 .timeline:nth-child(3n) .year {
            color: #13afae
        }

        .main-timeline3 .timeline:nth-child(3n) .timeline-content,
        .main-timeline3 .timeline:nth-child(3n) .timeline-content:before {
            background: #13afae
        }

        .main-timeline3 .timeline:nth-child(4n) .timeline-icon {
            border-top-color: #105572;
            border-right-color: #105572
        }

        .main-timeline3 .timeline:nth-child(4n) .year {
            color: #105572
        }

        .main-timeline3 .timeline:nth-child(4n) .timeline-content,
        .main-timeline3 .timeline:nth-child(4n) .timeline-content:before {
            background: #105572
        }

        @media only screen and (max-width:1199px) {
            .main-timeline3 .timeline {
                margin-top: -103px
            }

            .main-timeline3 .timeline-content:before {
                left: -18%
            }

            .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
                right: -18%
            }
        }

        @media only screen and (max-width:990px) {
            .main-timeline3 .timeline {
                margin-top: -127px
            }

            .main-timeline3 .timeline-content:before {
                left: -2%
            }

            .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
                right: -2%
            }
        }

        @media only screen and (max-width:767px) {
            .main-timeline3 .timeline {
                margin-top: 0;
                overflow: hidden
            }

            .main-timeline3 .timeline:before,
            .main-timeline3 .timeline:nth-child(2n):before {
                box-shadow: none
            }

            .main-timeline3 .timeline-icon,
            .main-timeline3 .timeline:nth-child(2n) .timeline-icon {
                margin-top: -30px;
                margin-bottom: 20px;
                position: relative;
                transform: rotate(135deg)
            }

            .main-timeline3 .timeline:nth-child(2n) .year,
            .main-timeline3 .year {
                transform: rotate(-135deg)
            }

            .main-timeline3 .timeline-content,
            .main-timeline3 .timeline:nth-child(2n) .timeline-content {
                width: 100%;
                float: none;
                border-radius: 0 0 20px 20px;
                text-align: center;
                padding: 25px 20px;
                margin: 0 auto
            }

            .main-timeline3 .timeline-content:before,
            .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
                width: 15px;
                height: 25px;
                position: absolute;
                top: -22px;
                left: 50%;
                z-index: -1;
                transform: translate(-50%, 0)
            }
        }


        /*timeline4*/


        /******************* Timeline Demo - 8 *****************/

        .main-timeline4 {
            overflow: hidden;
            position: relative
        }

        .main-timeline4:after,
        .main-timeline4:before {
            content: "";
            display: block;
            width: 100%;
            clear: both
        }

        .main-timeline4:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #d6d5d5;
            position: absolute;
            top: 30px;
            left: 50%
        }

        .main-timeline4 .timeline {
            width: 50%;
            float: left;
            padding-right: 30px;
            position: relative
        }

        .main-timeline4 .timeline-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff;
            border: 3px solid #fe6847;
            position: absolute;
            top: 5.5%;
            right: -17.5px
        }

        .main-timeline4 .year {
            display: block;
            padding: 10px;
            margin: 0;
            font-size: 30px;
            color: #fff;
            border-radius: 0 50px 50px 0;
            background: #fe6847;
            text-align: center;
            position: relative
        }

        .main-timeline4 .year:before {
            content: "";
            border-top: 35px solid #f59c8b;
            border-left: 35px solid transparent;
            position: absolute;
            bottom: -35px;
            left: 0
        }

        .main-timeline4 .timeline-content {
            padding: 30px 20px;
            margin: 0 45px 0 35px;
            background: #f2f2f2
        }

        .main-timeline4 .title {
            font-size: 19px;
            font-weight: 700;
            color: #504f54;
            margin: 0 0 10px
        }

        .main-timeline4 .description {
            font-size: 14px;
            color: #7d7b7b;
            margin: 0
        }

        .main-timeline4 .timeline:nth-child(2n) {
            padding: 0 0 0 30px
        }

        .main-timeline4 .timeline:nth-child(2n) .timeline-icon {
            right: auto;
            left: -14.5px
        }

        .main-timeline4 .timeline:nth-child(2n) .year {
            border-radius: 50px 0 0 50px;
            background: #7eda99
        }

        .main-timeline4 .timeline:nth-child(2n) .year:before {
            border-left: none;
            border-right: 35px solid transparent;
            left: auto;
            right: 0
        }

        .main-timeline4 .timeline:nth-child(2n) .timeline-content {
            text-align: right;
            margin: 0 35px 0 45px
        }

        .main-timeline4 .timeline:nth-child(2) {
            margin-top: 170px
        }

        .main-timeline4 .timeline:nth-child(odd) {
            margin: -175px 0 0
        }

        .main-timeline4 .timeline:nth-child(even) {
            margin-bottom: 80px
        }

        .main-timeline4 .timeline:first-child,
        .main-timeline4 .timeline:last-child:nth-child(even) {
            margin: 0
        }

        .main-timeline4 .timeline:nth-child(2n) .timeline-icon {
            border-color: #7eda99
        }

        .main-timeline4 .timeline:nth-child(2n) .year:before {
            border-top-color: #92efad
        }

        .main-timeline4 .timeline:nth-child(3n) .timeline-icon {
            border-color: #8a5ec1
        }

        .main-timeline4 .timeline:nth-child(3n) .year {
            background: #8a5ec1
        }

        .main-timeline4 .timeline:nth-child(3n) .year:before {
            border-top-color: #a381cf
        }

        .main-timeline4 .timeline:nth-child(4n) .timeline-icon {
            border-color: #f98d9c
        }

        .main-timeline4 .timeline:nth-child(4n) .year {
            background: #f98d9c
        }

        .main-timeline4 .timeline:nth-child(4n) .year:before {
            border-top-color: #f2aab3
        }

        @media only screen and (max-width:767px) {
            .main-timeline4 {
                overflow: visible
            }

            .main-timeline4:before {
                top: 0;
                left: 0
            }

            .main-timeline4 .timeline:nth-child(2),
            .main-timeline4 .timeline:nth-child(even),
            .main-timeline4 .timeline:nth-child(odd) {
                margin: 0
            }

            .main-timeline4 .timeline {
                width: 100%;
                float: none;
                padding: 0 0 0 30px;
                margin-bottom: 20px !important
            }

            .main-timeline4 .timeline:last-child {
                margin: 0 !important
            }

            .main-timeline4 .timeline-icon {
                right: auto;
                left: -14.5px
            }

            .main-timeline4 .year {
                border-radius: 50px 0 0 50px
            }

            .main-timeline4 .year:before {
                border-left: none;
                border-right: 35px solid transparent;
                left: auto;
                right: 0
            }

            .main-timeline4 .timeline-content {
                margin: 0 35px 0 45px
            }
        }

        /*end timeline*/

    </style>

    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });

    </script>
    <!-- Favicon -->
    <link rel="icon" href="/assets/welcomepage/img/brand/favicon.ico" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/welcomepage/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="/assets/welcomepage/css/quick-website.css" id="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            {{-- <a class="navbar-brand" href="index.html">
                <img alt="Image placeholder" src="/assets/welcomepage/img/brand/dark.svg" id="navbar-logo">
            </a> --}}
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->

            @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    @auth
                        <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                            <li class="nav-item ">
                                <a href="{{ url('/home') }}" class="navbar-nav mt-4 mt-lg-0 ml-auto">Home</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                            <li class="nav-item ">
                                <a href="{{ route('login') }}" class="navbar-nav mt-4 mt-lg-0 ml-auto">Masuk</a>
                            </li>
                        </ul>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="navbar-btn btn btn-sm btn-success d-none d-lg-inline-block ml-3">Mendaftar</a>

                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-7">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="/assets/welcomepage/img/svg/illustrations/illustration-3.svg"
                            class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                        MTSMU 2 <strong class="text-success">BAKID</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                        Terwujudnya Generasi Muslim yang Unggul dalam Imtaq, Iptek dan Akhlak Al-karimah
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <button class="btn btn-warning btn-icon" type="button"
                            onClick="document.getElementById('alur').scrollIntoView();" />Alur Pendaftaran
                        </button>
                        <a href="{{ route('register') }}" class="btn btn-success btn-icon">
                            <span class="btn-inner--text">Mendaftar</span>
                            <span class="btn-inner--icon"><i data-feather="chevron-right"></i></span>
                        </a>
                        {{-- <a href="{{ route('login') }}"
                            class="btn btn-neutral btn-icon d-none d-lg-inline-block">Masuk</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container" id="alur">
            <h3 class="card-title text-center mb-3">ALUR PENDAFTARAN</h3>
            <!-- <input type="button" onClick="document.getElementById('middle').scrollIntoView();" /> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline4">
                        <div class="timeline">
                            <span class="timeline-icon"></span>
                            <span class="year">1</span>
                            <div class="timeline-content">
                                <h3 class="title">Mengisi formulir</h3>
                                <p class="description">
                                    Formulir Pendaftaran dapat diakses di halaman ini
                                <h6><b><a href="{{ route('register') }}">sim.mtsmu2bakid.sch.id</a></b></h6>
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <span class="timeline-icon"></span>
                            <span class="year">2</span>
                            <div class="timeline-content">
                                <h3 class="title">Melakukan registrasi ulang</h3>
                                <p class="description">
                                    Registrasi ulang dapat dilakukan dengan membawa berkas persyaratan ke kantor MTs 2.
                                    Paling lambat 20 syawal ( Selasa, 1 Juni 2021).
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <span class="timeline-icon"></span>
                            <span class="year">3</span>
                            <div class="timeline-content">
                                <h3 class="title">Berkas</h3>
                                <p class="description">
                                    adapun berkas yang perlu dibawa diantaranya:
                                    <br>
                                    <br> - Fotocopy Ijazah dan Nilai Ujian sekolah/Madrasah(Legalisir) sebanyak 3 lembar
                                    <br> - Fotocopy Akta kelahiran, Ktp orang tua dan KK (Kartu Keluarga)
                                    <br> - Surat Keterangan Lulus atau Surat keterangan mengikuti ujian (Jika belum ada
                                    ijazah)
                                    <br> - Membawa surat pernyataan wali siswa (MoU) bermaterai 6000
                                    Pas foto 3x4 Hitam putih - 4 Lembar
                                </p>
                            </div>
                        </div>
                        <div class="timeline">
                            <span class="timeline-icon"></span>
                            <span class="year">4</span>
                            <div class="timeline-content">
                                <h3 class="title">Melunasi administrasi</h3>
                                <p class="description">
                                    Biaya administrasi (Seragam Batik) Rp 200.000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>










    <!-- Core JS  -->
    <script src="/assets/welcomepage/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/welcomepage/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/welcomepage/libs/svg-injector/dist/svg-injector.min.js"></script>
    <script src="/assets/welcomepage/libs/feather-icons/dist/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="/assets/welcomepage/js/quick-website.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })

    </script>
</body>

</html>
