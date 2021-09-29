<html>

    <div class="panel">

          
                    
                    <table class="table_evaluation_doc"  border='1'>
                        <tr class="tr_header_gray">
                            <th></th>
                            <th rowspan="2">ความสามารถของนักเรียน</th>
                            <th colspan="5">ระดับความสามารถของนักเรียน</th>
                        </tr>
                        <tr class="tr_header_gray">
                             <th colspan="2"></th>
                            <th style="width: 10%;">มากที่สุด</th>
                            <th style="width: 10%;">มาก</th>
                            <th style="width: 10%;">ปานกลาง</th>
                            <th style="width: 10%;">น้อย</th>
                            <th style="width: 10%;">น้อยที่สุด</th>
                        </tr>
                       <?php $i=0; ?>
                        @foreach($topic2 as $topic)
                        <tr class="tr_header_tranparent" style="height:50px;">
                            <th></th>
                            <th>{{$topic->detail}}</th>
                           <th>5</th>
                           <th>4</th>
                            <th>3</th>
                            <th>2</th>
                            <th>1</th>
                        </tr>
                        <?php $j=0; ?>
              
                        <?php $question=App\pa_evaluation::find_question($topic->no); ?>
                         @foreach($question as $question)
                        <tr>
                            <td style="text-align:center;vertical-align: top;">{{$question->no}}.</td>
                            <td style="width: 50%;text-align: left;vertical-align: top;">
                                {{$question->detail}}
                            </td>
                            @for($k=1;$k<=5;$k++)   
                          <?php $answer=App\pa_evaluation::find_answer($topic->no,$question->no,uId(),'WE7845415215'); ?>     
                            @if($answer==$k)
                            <td>&#10003;</td>
                            @else 
                            <td></td> 
                            @endif         
                            @endfor
                          <?php $j++; ?>
                        </tr>
                       @endforeach
                         <?php $i++; ?>
                        @endforeach
                      
                    </table>
                 
            
                
          

    </div>
</html>