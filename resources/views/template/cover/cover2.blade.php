<html>
    <style>
        .panel_cover{
            font-family: 'Niramit', sans-serif;
            font-size: 10pt;
            padding:0em;
            text-align:center;
            
            background-repeat:no-repeat;
             background-size: 100% 100%;
            width: 100%;
            height:100%;
            background-image:url({{url("/storage/template/template02/firstpage.gif")}});
/*            background-color: red;*/
        }
    </style>
    <div class="panel_cover" style="">

         <div style="height: 40%;">
        </div>
        <div style="height: 30%;text-align: right;padding-top:0em;padding-right: 2em;">
           
            <h2>{{$Profile->firstname}} {{$Profile->lastname}}</h2>
            ตำแหน่ง {{$Profile->position}} {{$Profile->academic}}
        </div>
        
    </div>
</body>
</html>