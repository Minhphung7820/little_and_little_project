<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChenSuKien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['nameEvent' => 'Biển nhân tạo', 'slug' => Str::slug('Biển nhân tạo'), 'image' => 'https://dulichlive.com/sai-gon/wp-content/uploads/sites/9/2020/06/Cong-vien-Dam-Sen-3.png', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 50000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Trượt ống nước', 'slug' => Str::slug('Trượt ống nước'), 'image' => 'https://asiaopentours.net/wp-content/uploads/2018/08/dam-sen-park-1.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 25000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Lâu đài nước', 'slug' => Str::slug('Lâu đài nước'), 'image' => 'https://www.damsenwaterpark.com.vn/wp-content/uploads/2020/khu-tro-choi/ho%20thieu%20nhi/DSN_Children-pool_01.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 40000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Đu quay tròn', 'slug' => Str::slug('Đu quay tròn'), 'image' => 'https://taxisanbayre.com/wp-content/uploads/2018/06/thap-xoay-8.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 60000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Tàu lượn siêu tốc', 'slug' => Str::slug('Tàu lượn siêu tốc'), 'image' => 'https://halotravel.vn/wp-content/uploads/2020/10/Cong-vien-Dam-Sen-3.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 30000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Đu quay khổng lồ', 'slug' => Str::slug('Đu quay khổng lồ'), 'image' => 'https://congviendamsen.com/wp-content/uploads/2016/11/du-quay-dung-damsen.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 55000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Lái xe điện', 'slug' => Str::slug('Lái xe điện'), 'image' => 'https://angiangtourism.vn/cac-tro-choi-o-dam-sen-kho/imager_3_3806_700.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 60000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Đu thuyền', 'slug' => Str::slug('Đu thuyền'), 'image' => 'https://i.ytimg.com/vi/Dw-Oc22rRQQ/maxresdefault.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 50000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Đu dây vượt thác', 'slug' => Str::slug('Đu dây vượt thác'), 'image' => 'https://www.damsenwaterpark.com.vn/wp-content/uploads/2020/khu-tro-choi/du%20day/du-day-vuot-thac.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 30000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
            ['nameEvent' => 'Xem thủy cung', 'slug' => Str::slug('Xem thủy cung'), 'image' => 'https://halotravel.vn/wp-content/uploads/2020/10/thuy_cung_damsen.jpg', 'dateBegin' => now(), 'dateEnd' => now()->addDays(2), 'location' => 'Đầm sen Park', 'price' => 45000, 'content' => '<p>Nơi du kh&aacute;ch tha hồ &ldquo;thử th&aacute;ch&rdquo; l&ograve;ng dũng cảm của bản th&acirc;n với hệ thống tr&ograve; chơi cảm gi&aacute;c mạnh được trang bị m&aacute;y m&oacute;c hiện đại tại khu du lịch Đầm Sen Kh&ocirc;. Du kh&aacute;ch sẽ cảm thấy vừa hồi hộp, vừa lo sợ lại vừa phấn kh&iacute;ch, khi đ&atilde; vượt qua được tr&ograve; chơi th&igrave; cũng giống như vượt qua được &ldquo;giới hạn&rdquo; của bản th&acirc;n trong thời gian qua. Trong đ&oacute; nổi bật hơn cả l&agrave;: v&ograve;ng quay thần tốc, t&agrave;u vượt th&aacute;c, Power Surge,&hellip;</p>

            <p><em>Lưu &yacute;: Tuy nhi&ecirc;n, với những du kh&aacute;ch sức khỏe k&eacute;m, sợ độ cao hoặc c&oacute; bệnh về tim mạch th&igrave; kh&ocirc;ng n&ecirc;n tham gia những tr&ograve; chơi n&agrave;y.</em></p>
            
            <p><img alt="các trò chơi ở đầm sen khô" src="https://dulich3mien.vn/wp-content/uploads/2022/03/HON-SEN-KHO-02-min.jpg" style="height:779px; width:974px" /></p>
            
            <p>Tại c&ocirc;ng vi&ecirc;n Đầm Sen Kh&ocirc; c&oacute; 5 tr&ograve; chơi tương t&aacute;c c&ocirc;ng nghệ hiện đại, ti&ecirc;n tiến nhất được rất nhiều bạn nhỏ, du kh&aacute;ch trẻ y&ecirc;u th&iacute;ch như: Rạp chiếu phim 8D, l&acirc;u đ&agrave;i kỳ th&uacute;, bắn s&uacute;ng Run Raider, đua xe Turbo Racing, 9D Virtual Reality. Du kh&aacute;ch sẽ được trải nghiệm những c&ocirc;ng nghệ ti&ecirc;n tiến nhất hiện nay, tựa như bước ch&acirc;n v&agrave; một thế giới mới lạ, đầy kỳ th&uacute; trong tương lai.</p>
            
            <p>&nbsp;</p>', 'created_at' => now()],
        ]);
    }
}
