<!DOCTYPE html>
<html>
<head>
<title>{{$proiect->nume}}</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<style>

    .signature, .title { 
        float:left;
        border-top: 1px solid #000;
        width: 200px; 
        text-align: center;
    }

    .page-break {
        page-break-after: always;
    }

</style>

<body>

<center>

        @if ($proiect->elev_one)

            <div style="width:670px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
                <div style="width:620px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">

                    <span style="font-size:50px; font-weight:bold">Diploma Literatura romana in dimensiune virtuala</span>
                    <br><br><br>
                    <span style="font-size:30px"><b>{{$proiect->elev_one}}</b></span><br/><br/>
                    <span style="font-size:25px"><i>a obtinut rezultatul </i></span> <br/><br/>
                    <span style="font-size:30px">

                        @if ($proiect->premiu == 0)
                            Nimic
                        @endif

                        @if ($proiect->premiu == 1)
                            Premiul I
                        @endif
                        
                        @if ($proiect->premiu == 2)
                            Premiul II
                        @endif

                        @if ($proiect->premiu == 3)
                            Premiul III
                        @endif

                        @if ($proiect->premiu == 4)
                            Mentiune
                        @endif
                    
                    </span> <br/><br/>
                    <span style="font-size:20px">cu scorul <b>{{$proiect->punctaj}}</b></span> <br/><br/><br/><br/>
                    <span style="font-size:25px"><i>Prin participarea cu proiectul {{$proiect->nume}}</i></span><br>

                <table style="margin-top:40px;float:left">
                    <tr>
                        <td><span><b>semnatura</b></td>
                        </tr>
                        <tr>
                        <td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
                        </tr>
                        <tr>
                        </tr>
                        </table>
                        <table style="margin-top:40px;float:right">
                        <tr>
                        <td><span><b>semnatura</b></td>
                        </tr>
                        <tr>
                        <td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
                        </tr>
                        <tr>
                    </tr>
                </table>

                </div>
            </div>

        @endif


        @if ($proiect->elev_two)

        <div class = "page-break"></div>

        <div style="width:670px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:620px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">

                <span style="font-size:50px; font-weight:bold">Diploma Literatura romana in dimensiune virtuala</span>
                <br><br><br>
                <span style="font-size:30px"><b>{{$proiect->elev_two}}</b></span><br/><br/>
                <span style="font-size:25px"><i>a obtinut rezultatul </i></span> <br/><br/>
                <span style="font-size:30px">

                    @if ($proiect->premiu == 0)
                        Nimic
                    @endif

                    @if ($proiect->premiu == 1)
                        Premiul I
                    @endif
                    
                    @if ($proiect->premiu == 2)
                        Premiul II
                    @endif

                    @if ($proiect->premiu == 3)
                        Premiul III
                    @endif

                    @if ($proiect->premiu == 4)
                        Mentiune
                    @endif
                
                </span> <br/><br/>
                <span style="font-size:20px">cu scorul <b>{{$proiect->punctaj}}</b></span> <br/><br/><br/><br/>
                <span style="font-size:25px"><i>Prin participarea cu proiectul {{$proiect->nume}}</i></span><br>

            <table style="margin-top:40px;float:left">
                <tr>
                    <td><span><b>semnatura</b></td>
                    </tr>
                    <tr>
                    <td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                    </tr>
                    </table>
                    <table style="margin-top:40px;float:right">
                    <tr>
                    <td><span><b>semnatura</b></td>
                    </tr>
                    <tr>
                    <td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                </tr>
            </table>

            </div>
        </div>

        @endif


        @if ($proiect->elev_three)

        <div class = "page-break"></div>

        <div style="width:670px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:620px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">

                <span style="font-size:50px; font-weight:bold">Diploma Literatura romana in dimensiune virtuala</span>
                <br><br><br>
                <span style="font-size:30px"><b>{{$proiect->elev_three}}</b></span><br/><br/>
                <span style="font-size:25px"><i>a obtinut rezultatul </i></span> <br/><br/>
                <span style="font-size:30px">

                    @if ($proiect->premiu == 0)
                        Nimic
                    @endif

                    @if ($proiect->premiu == 1)
                        Premiul I
                    @endif
                    
                    @if ($proiect->premiu == 2)
                        Premiul II
                    @endif

                    @if ($proiect->premiu == 3)
                        Premiul III
                    @endif

                    @if ($proiect->premiu == 4)
                        Mentiune
                    @endif
                
                </span> <br/><br/>
                <span style="font-size:20px">cu scorul <b>{{$proiect->punctaj}}</b></span> <br/><br/><br/><br/>
                <span style="font-size:25px"><i>Prin participarea cu proiectul {{$proiect->nume}}</i></span><br>

            <table style="margin-top:40px;float:left">
                <tr>
                    <td><span><b>semnatura</b></td>
                    </tr>
                    <tr>
                    <td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                    </tr>
                    </table>
                    <table style="margin-top:40px;float:right">
                    <tr>
                    <td><span><b>semnatura</b></td>
                    </tr>
                    <tr>
                    <td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                </tr>
            </table>

            </div>
        </div>

        @endif


        @if ($proiect->elev_four)

        <div class = "page-break"></div>

        <div style="width:670px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:620px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">

                <span style="font-size:50px; font-weight:bold">Diploma Literatura romana in dimensiune virtuala</span>
                <br><br><br>
                <span style="font-size:30px"><b>{{$proiect->elev_four}}</b></span><br/><br/>
                <span style="font-size:25px"><i>a obtinut rezultatul </i></span> <br/><br/>
                <span style="font-size:30px">

                    @if ($proiect->premiu == 0)
                        Nimic
                    @endif

                    @if ($proiect->premiu == 1)
                        Premiul I
                    @endif
                    
                    @if ($proiect->premiu == 2)
                        Premiul II
                    @endif

                    @if ($proiect->premiu == 3)
                        Premiul III
                    @endif

                    @if ($proiect->premiu == 4)
                        Mentiune
                    @endif
                
                </span> <br/><br/>
                <span style="font-size:20px">cu scorul <b>{{$proiect->punctaj}}</b></span> <br/><br/><br/><br/>
                <span style="font-size:25px"><i>Prin participarea cu proiectul {{$proiect->nume}}</i></span><br>

            <table style="margin-top:40px;float:left">
                <tr>
                    <td><span><b>semnatura</b></td>
                    </tr>
                    <tr>
                    <td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                    </tr>
                    </table>
                    <table style="margin-top:40px;float:right">
                    <tr>
                    <td><span><b>semnatura</b></td>
                    </tr>
                    <tr>
                    <td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
                    </tr>
                    <tr>
                </tr>
            </table>

            </div>
        </div>

        @endif


</center>

</body>
</html> 