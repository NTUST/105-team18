<?php

use Illuminate\Database\Seeder;

class teamdataseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->TRUNCATE();
        DB::table('team')->insert([
            [
                'team_no'=>'1',
                'team_name'=>'第一組',
                'project_name'=>'my cactus and succulent diary',
                'project_descript' =>'給新手的入門多肉植物世界網站',
                'project_img'=>'prject1.jpg',
                'project_logo'=>'logo1.jpg'
            ],
            [
                'team_no'=>'2',
                'team_name'=>'第二組',
                'project_name'=>'台科學餐哪一胃',
                'project_descript' =>'<ul><li>介紹台科餐廳</li><li>解決不知道要吃什麼的煩惱</li></ul>',
                'project_img'=>'prject2.jpg',
                'project_logo'=>'logo2.jpg'
            ],
            [
                'team_no'=>'3',
                'team_name'=>'第三組',
                'project_name'=>'領養動物平台',
                'project_descript' =>'<ul><li>一個認養、送養平台</li><li>分享交流飼養心得</li></ul>',
                'project_img'=>'prject3.jpg',
                'project_logo'=>'logo3.jpg'
            ],
            [
                'team_no'=>'4',
                'team_name'=>'第四組',
                'project_name'=>'愛情俏顧問',
                'project_descript' =>'<ul><li>基本個人資料分析，針對你的暗戀對象，發覺哪裡不足需要改進。</li><li>跟我的meme做充足的對話練習，增加告白的成功率</li></ul>',
                'project_img'=>'prject4.jpg',
                'project_logo'=>'logo4.jpg'
            ],
            [
                'team_no'=>'5',
                'team_name'=>'第五組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject5.jpg',
                'project_logo'=>'logo5.jpg'
            ],
            [
                'team_no'=>'6',
                'team_name'=>'第六組',
                'project_name'=>'磬蔡莢',
                'project_descript' =>'主題式網站-輕食<br><ul><li>分享輕食食譜</li><li>教學步驟</ul></ul>',
                'project_img'=>'prject6.jpg',
                'project_logo'=>'logo6.jpg'
            ],
            [
                'team_no'=>'7',
                'team_name'=>'第七組',
                'project_name'=>'RENT AND BORROW ',
                'project_descript' =>'"最主要可以讓家中用不到的傢俱和器具透過簡易的 表格填寫,
                租給可以有效使用的人,
                讓這些傢俱及 器具的CP值可以提高,
                以達到物盡其用的效果。<br><ul><li>出租者:不浪費資源,
                還能賺點小外快</li> <li>借入者:用更少的代價達到相同的目的 </li></ul>"',
                'project_img'=>'prject7.jpg',
                'project_logo'=>'logo7.jpg'
            ],
            [
                'team_no'=>'8',
                'team_name'=>'第八組',
                'project_name'=>'null',
                'project_descript' =>'推廣健身',
                'project_img'=>'prject8.jpg',
                'project_logo'=>'logo8.jpg'
            ],
            [
                'team_no'=>'9',
                'team_name'=>'第九組',
                'project_name'=>'旅在台灣',
                'project_descript' =>'希望各位可以利用這個台灣觀光資訊網，網站內容吃喝玩樂包羅萬象、旅遊資訊豐富，希望提供給各位實用又便捷的旅遊資訊',
                'project_img'=>'prject9.jpg',
                'project_logo'=>'logo9.jpg'
            ],
            [
                'team_no'=>'10',
                'team_name'=>'第十組',
                'project_name'=>'二次元神聖之門(2D-sacred-gate)',
                'project_descript' =>'<ul><li>一個可以盡情觀看日本動漫的網站</li><li>無須註冊，可以任意觀賞你想看的動漫</li><li>提供新番更新時程表，讓你及時掌握動漫更新</li><li>動漫觀看區下方，提供留言區，給觀看者互相交流</li></ul>',
                'project_img'=>'prject10.jpg',
                'project_logo'=>'logo10.jpg'
            ],
            [
                'team_no'=>'11',
                'team_name'=>'第十一組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject11.jpg',
                'project_logo'=>'logo11.jpg'
            ],
            [
                'team_no'=>'12',
                'team_name'=>'第十二組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject12.jpg',
                'project_logo'=>'logo12.jpg'
            ],
            [
                'team_no'=>'14',
                'team_name'=>'第十四組',
                'project_name'=>'活動王',
                'project_descript' =>'<ul><li>使學生便於取得各方活動資訊</li><li>提供各方團體一個宣傳管道</li><li>幫助學生多元成長，適性發展</li></ul>',
                'project_img'=>'prject14.jpg',
                'project_logo'=>'logo14.jpg'
            ],
            [
                'team_no'=>'15',
                'team_name'=>'第十五組',
                'project_name'=>'"Hello，天龍國。"',
                'project_descript' =>'<ul><li>以捷運路線為主軸</li><li>匯集美食、美景</li><li>經驗分享</li><li>透過共筆達到資料更新</li></ul>',
                'project_img'=>'prject15.jpg',
                'project_logo'=>'logo15.jpg'
            ],
            [
                'team_no'=>'16',
                'team_name'=>'第十六組',
                'project_name'=>'台灣。台北',
                'project_descript' =>'"提供臺北十大旅遊景點，不需要導遊，也能自己遊臺北。也供讀者自行上傳私房周邊景點，讓來到此景點的旅人，能更有效率地了解附近的食衣住行，不用花太多時間在找尋資料上，也可避免遺珠之憾。"',
                'project_img'=>'prject16.jpg',
                'project_logo'=>'logo16.jpg'
            ],
            [
                'team_no'=>'17',
                'team_name'=>'第十七組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject17.jpg',
                'project_logo'=>'logo17.jpg'
            ],
            [
                'team_no'=>'18',
                'team_name'=>'第十八組',
                'project_name'=>'Jerry’s Grading System',
                'project_descript' =>'Jerry’s Grading System (JGS) 是設計來使網頁製作課的期末專案組別互評變得更方便的網站',
                'project_img'=>'prject18.jpg',
                'project_logo'=>'logo18.jpg'
            ],
            [
                'team_no'=>'19',
                'team_name'=>'第十九組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject19.jpg',
                'project_logo'=>'logo19.jpg'
            ],
            [
                'team_no'=>'20',
                'team_name'=>'第二十組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject20.jpg',
                'project_logo'=>'logo20.jpg'
            ],
            [
                'team_no'=>'21',
                'team_name'=>'第二十一組',
                'project_name'=>'null',
                'project_descript' =>'null',
                'project_img'=>'prject21.jpg',
                'project_logo'=>'logo21.jpg'
            ]


        ]);
    }
}
