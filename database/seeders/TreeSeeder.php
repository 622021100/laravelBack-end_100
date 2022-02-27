<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trees')->delete();
        DB::table('trees')->insert([
            [
               'Tree_name' => 'ต้นเศรษฐีเรือนใน',
               'Tree_mean' => 'จัดเป็นว่านป้องกันภัย และเสริมความเป็นสิริมงคล ช่วยปัดเป่าโรคภัย ช่วยคุ้มครองภัยอันตราย ป้องกันสิ่งอัปมงคลทั้งปวงให้แก่ผู้ปลูก และคนในบ้านและเป็นว่านเมตตามหานิยม และว่านเสริมสิริมงคลร่วมกัน ผู้ใดปลูกจะทำให้คนรักใคร่ ผู้คนนับถือ และยำเกรง รวมถึงช่วยเสริมบุญบารมี เสริมอำนาจวาสนาให้แก่ผู้ปลูก และคนในบ้านอีกทั้งเป็นว่านเสริมโชค เสริมลาภ ช่วยเรียกเงินเรียกทอง เรียกโชคเรียกลาภ การทำมาค้าขายเจริญรุ่งเรือง ทั้งผู้ปลูก และคนในบ้าน ทั้งนี้ มีความเชื่อว่า หากว่านออกดอกช่วงใด ช่วงนั้น จะเป็นช่วงที่วาสนาผู้ปลูกหรือคนในบ้านเพิ่มพูนขึ้น อาจได้เลื่อนตำแหน่งในหน้าที่การงาน หรือ มีโชคมีลาภก้อนใหญ่',
               'Tree_Feature' => 'ใบสีเขียว มีแถบขาวกลางใบ มีเหง้าใต้ดิน รากสีขาว อวบน้ำ เมื่อแก่เต็มที่จะมีลำต้นอ่อนแตกออกมาเป็นกิ่งอ่อน ๆ มีต้นอ่อนเล็ก ๆ เป็นกระจุกอยู่ตรงปลายกิ่ง ลักษณะคล้ายแมงมุม',
               'Tree_PT' => 'การแยกเหง้าปลูก ถือเป็นวิธีที่นิยมที่สุด เนื่องจาก ต้นว่านเศรษฐีสามารถแตกหน่อใหม่ได้ตลอด เริ่มด้วยการคัดเลือกต้นอ่อนหรือเหง้าอ่อนของว่านเศรษฐีเรือนใน แล้วขุดหรือตัดเหง้าออกมาปลูก ทั้งแยกเหง้าลงปลูกในกระถาง หรือ แยกลงปลูกในแปลงปลูกได้เลย',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
            ],
            [
               'Tree_name' => 'ต้นเศรษฐีเรือนนอก',
               'Tree_mean' => 'เป็นว่านป้องกันภัย ช่วยปัดภัยอันตรายทั้งหลาย ทั้งจากมนุษย์ สัตว์ และภูตผี รวมถึงสิ่งอัปมงคลทั้งปวงให้แก่ผู้ปลูก และคนในบ้าน รวมถึงบริวารทั้งหลาย และเป็นว่านเมตตามหานิยม ผู้ใดปลูกจะทำให้คนรักคนใคร่ ผู้คนนิยมชมชอบ ผู้คนนับถือ เป็นว่านเสริมโชค เสริมลาภ ช่วยเรียกเงินเรียกทอง การค้าการขายเจริญก้าวหน้า ช่วยเสริมบุญบารมี เสริมดวงวาสนา เสริมโชคเสริมลาภ และด้านป้องกันภัยหรือสิ่งอัปมงคล ทั้งต่อผู้ปลูก คนในบ้าน และบริวารทั้งหลาย ทั้งนี้ มีความเชื่อว่า หากว่านเศรษฐีเรือนนอกออกดอกช่วงใด ช่วงนั้น จะเป็นช่วงที่วาสนาผู้ปลูกหรือคนในบ้านจะมีมาก การทำมาค้าขายรุ่งเรือง อาจได้โชคลาภก้อนใหญ่ หรือ มีการเลื่อนตำแหน่งหน้าที่ เป็นต้น',
               'Tree_Feature' => 'ความสูง 20 ถึง 30 เซนติเมตร มีลำต้นเป็นพุ่มมีเหง้าสั้นๆ และมีรากสะสมอาหารเป็นตุ้มสีขาว เป็นใบเดี่ยว เรียงเวียนสลับ รูปขอบขนาน กว้าง 0.8 ถึง 1.6 เซนติเมตร ยาว 10 – 20 เซนติเมตร ปลายใบแหลม โคนใบแผ่เป็นกาบ ขอบใบเรียบ ผิวใบด้านบนสีเขียวเข้มเป็นมัน มีแถบด่างสีขาวครีมบริเวณขอบใบและดอกออกเป็นช่อกระจะ ดอกย่อยขนาดเล็กสีขาว',
               'Tree_PT' => 'แยกเหง้าปลูก ด้วยการถอนหรือตัดแยกเหง้าขนาดเล็กออกจากต้นแม่ ทั้งนี้ เหง้าที่แยกออกมาควรมีรากติดมาด้วยหรือไม่มีก็ได้ เพียงให้มีโคนเหง้ายาว 1-2 ซม. และเมื่อปลูกติด และต้นเติบโตตามปกติแล้ว เหง้าของว่านเศรษฐีเรือนนอกก็จะแตกเหง้าใหม่ออกเรื่อย ๆ ตามธรรมชาติ',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
            ],
            [
               'Tree_name' => 'กวนอิมเงิน',
               'Tree_mean' => 'คนโบราณมีความเชื่อว่าต้นกวนอิมเงินเป็นต้นไม้มงคล ที่เป็นอีกหนึ่งต้นไม้มงคลรวยทรัพย์ หากบ้านไหนปลูกจะเรียกเงิน เรียกทรัพย์เข้าบ้าน คนในบ้านจะมีฐานะที่ดีขึ้น จึงจัดเป็น 1 ในต้นไม้มงคล แนะนำให้ปลูกทางทิศตะวันออก และนิยมนำไปใช้ในพิธีสำคัญทางศาสนาอีกด้วย เป็นไม้มงคลปลูกในบ้านที่เห็นบ่อย สามารถปลูกบนโต๊ะทำงานก็ได้เช่นกัน',
               'Tree_Feature' => 'ต้นไม้มงคลปลูกในบ้านต้นนี้ มีลักษณะเป็นไม้ยืนต้น สูงสุดประมาณ 3 เมตร ลำต้นกลมเป็นข้อปล้อง ขนาด 1-2 เซนติเมตร ไม่มีกิ่ง ใบเป็นใบเลี้ยงเดี่ยว แตกออกทางยอดลำต้น เรียวยาว ปลายใบแหลม เป็นสีเขียวและขาวสลับกัน ',
               'Tree_PT' => 'ควรปลูกในดินร่วน ผสมปุ๋ยคอกและแกลบ หากปลูกในกระถางควรเปลี่ยนประถางและดินทุก ๆ 1-2 ปี ต้นไม้มงคลชนิดนี้สามารถอยู่ในที่แดดรำไรหรือแดดจัดก็ได้ รดนำอย่างน้อยอาทิตย์ละ 2 ครั้ง',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
            ],
            [
               'Tree_name' => 'กวนอิมทอง',
               'Tree_mean' => 'ปัจจุบันนิยมปลูกเป็นไม้กระถางและไม้แคระ นอกจากปลูกเพื่อใช้ตกแต่งสวนและประดับในบ้านแล้ว ยังมีความเชื่อว่าหากปลูกแล้ว จะช่วยป้องกันภัยอันตรายจากภายนอกได้ด้วย เป็นการปัดเป่าสิ่งแย่ ๆ ออกไป',
               'Tree_Feature' => 'ลิ้นมังกรเป็นไม้ล้มลุก เหง้าอยูในดิน เห็นข้อปล้องชัดเจน ทุกส่วนของต้นจะอวบน้ำ เปราะหักง่าย ใบรูปดาบใบยาวปลายแหลม ขอบใบมีสีเหลือง และกลางใบมีสีเขียวอ่อน ประพาดด้วยเส้นสีเขียวเข้มสวยงาม',
               'Tree_PT' => 'ปลูกง่าย ขึ้นได้ทุกสภาพพื้นที่ เพราะธรรมชาติของลิ้นมังกร สามารถเติบโตอยู่ในที่แห้งแล้งที่เป็นดินทรายได้ ชอบแสงแดดจัด ทนต่อความแห้งแล้งได้ดี เพราะฉะนั้นหากจะปลูกในกระถาง แนะนำเป็นกระถางดินเผาที่สามารถดูดซึมน้ำได้ พยายามอย่าให้น้ำเยอะจนแฉะ เพราะจะทำให้รากเน่าจนถึงขั้นตายได้ เน้นดินที่มีความร่วนโปร่งและซึมซับน้ำได้ดีอย่างเช่นดินร่วน ผสมใบก้ามปู และมะพร้าวสับ',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
