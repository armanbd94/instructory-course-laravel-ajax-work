<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    private $locations = [
        ['location_name'=>'Dhaka', 'parent_id'=>0],
        ['location_name'=>'Faridpur', 'parent_id'=>0],
        ['location_name'=>'Gazipur', 'parent_id'=>0],
        ['location_name'=>'Gopalganj', 'parent_id'=>0],
        ['location_name'=>'Jamalpur', 'parent_id'=>0],
        ['location_name'=>'Kishoreganj', 'parent_id'=>0],
        ['location_name'=>'Madaripur', 'parent_id'=>0],
        ['location_name'=>'Manikganj', 'parent_id'=>0],
        ['location_name'=>'Munshiganj', 'parent_id'=>0],
        ['location_name'=>'Mymensingh', 'parent_id'=>0],
        ['location_name'=>'Narayanganj', 'parent_id'=>0],
        ['location_name'=>'Narsingdi', 'parent_id'=>0],
        ['location_name'=>'Netrokona', 'parent_id'=>0],
        ['location_name'=>'Rajbari', 'parent_id'=>0],
        ['location_name'=>'Shariatpur', 'parent_id'=>0],
        ['location_name'=>'Sherpur', 'parent_id'=>0],
        ['location_name'=>'Tangail', 'parent_id'=>0],
        ['location_name'=>'Bogra', 'parent_id'=>0],
        ['location_name'=>'Joypurhat', 'parent_id'=>0],
        ['location_name'=>'Naogaon', 'parent_id'=>0],
        ['location_name'=>'Natore', 'parent_id'=>0],
        ['location_name'=>'Nawabganj', 'parent_id'=>0],
        ['location_name'=>'Pabna', 'parent_id'=>0],
        ['location_name'=>'Rajshahi', 'parent_id'=>0],
        ['location_name'=>'Sirajgonj', 'parent_id'=>0],
        ['location_name'=>'Dinajpur', 'parent_id'=>0],
        ['location_name'=>'Gaibandha', 'parent_id'=>0],
        ['location_name'=>'Kurigram', 'parent_id'=>0],
        ['location_name'=>'Lalmonirhat', 'parent_id'=>0],
        ['location_name'=>'Nilphamari', 'parent_id'=>0],
        ['location_name'=>'Panchagarh', 'parent_id'=>0],
        ['location_name'=>'Rangpur', 'parent_id'=>0],
        ['location_name'=>'Thakurgaon', 'parent_id'=>0],
        ['location_name'=>'Barguna', 'parent_id'=>0],
        ['location_name'=>'Barisal', 'parent_id'=>0],
        ['location_name'=>'Bhola', 'parent_id'=>0],
        ['location_name'=>'Jhalokati', 'parent_id'=>0],
        ['location_name'=>'Patuakhali', 'parent_id'=>0],
        ['location_name'=>'Pirojpur', 'parent_id'=>0],
        ['location_name'=>'Bandarban', 'parent_id'=>0],
        ['location_name'=>'Brahmanbaria', 'parent_id'=>0],
        ['location_name'=>'Chandpur', 'parent_id'=>0],
        ['location_name'=>'Chittagong', 'parent_id'=>0],
        ['location_name'=>'Comilla', 'parent_id'=>0],
        ['location_name'=>'Cox\'s Bazar', 'parent_id'=>0],
        ['location_name'=>'Feni', 'parent_id'=>0],
        ['location_name'=>'Khagrachari', 'parent_id'=>0],
        ['location_name'=>'Lakshmipur', 'parent_id'=>0],
        ['location_name'=>'Noakhali', 'parent_id'=>0],
        ['location_name'=>'Rangamati', 'parent_id'=>0],
        ['location_name'=>'Habiganj', 'parent_id'=>0],
        ['location_name'=>'Maulvibazar', 'parent_id'=>0],
        ['location_name'=>'Sunamganj', 'parent_id'=>0],
        ['location_name'=>'Sylhet', 'parent_id'=>0],
        ['location_name'=>'Bagerhat', 'parent_id'=>0],
        ['location_name'=>'Chuadanga', 'parent_id'=>0],
        ['location_name'=>'Jessore', 'parent_id'=>0],
        ['location_name'=>'Jhenaidah', 'parent_id'=>0],
        ['location_name'=>'Khulna', 'parent_id'=>0],
        ['location_name'=>'Kushtia', 'parent_id'=>0],
        ['location_name'=>'Magura', 'parent_id'=>0],
        ['location_name'=>'Meherpur', 'parent_id'=>0],
        ['location_name'=>'Narail', 'parent_id'=>0],
        ['location_name'=>'Satkhira', 'parent_id'=>0],
        ['location_name'=>'Gulsan 1', 'parent_id'=>1],
        ['location_name'=>'Dhamrai Upazila', 'parent_id'=>1],
        ['location_name'=>'Dohar Upazila', 'parent_id'=>1],
        ['location_name'=>'Keraniganj Upazila', 'parent_id'=>1],
        ['location_name'=>'Nawabganj Upazila', 'parent_id'=>1],
        ['location_name'=>'Savar Upazila', 'parent_id'=>1],
        ['location_name'=>'Charbhadrasan Upazila', 'parent_id'=>2],
        ['location_name'=>'Sadarpur Upazila', 'parent_id'=>2],
        ['location_name'=>'Shaltha Upazila', 'parent_id'=>2],
        ['location_name'=>'Nagarkanda Upazila', 'parent_id'=>2],
        ['location_name'=>'Bhanga Upazila', 'parent_id'=>2],
        ['location_name'=>'Madhukhali Upazila', 'parent_id'=>2],
        ['location_name'=>'Alfadanga Upazila', 'parent_id'=>2],
        ['location_name'=>'Boalmari Upazila', 'parent_id'=>2],
        ['location_name'=>'Faridpur Sadar Upazila', 'parent_id'=>2],
        ['location_name'=>'Tongi', 'parent_id'=>3],
        ['location_name'=>'Kaliganj', 'parent_id'=>3],
        ['location_name'=>'Sripur', 'parent_id'=>3],
        ['location_name'=>'Kapasia', 'parent_id'=>3],
        ['location_name'=>'Kaliakior', 'parent_id'=>3],
        ['location_name'=>'Gazipur Sadar-Joydebpur', 'parent_id'=>3],
        ['location_name'=>'Kotalipara Upazila', 'parent_id'=>4],
        ['location_name'=>'Tungipara Upazila', 'parent_id'=>4],
        ['location_name'=>'Muksudpur Upazila', 'parent_id'=>4],
        ['location_name'=>'Kashiani Upazila', 'parent_id'=>4],
        ['location_name'=>'Gopalganj Sadar Upazila', 'parent_id'=>4],
        ['location_name'=>'Sarishabari Upazila', 'parent_id'=>5],
        ['location_name'=>'Melandaha Upazila', 'parent_id'=>5],
        ['location_name'=>'Narundi Police I.C', 'parent_id'=>5],
        ['location_name'=>'Madarganj Upazila', 'parent_id'=>5],
        ['location_name'=>'Jamalpur Sadar Upazila', 'parent_id'=>5],
        ['location_name'=>'Islampur Upazila', 'parent_id'=>5],
        ['location_name'=>'Baksiganj Upazila', 'parent_id'=>5],
        ['location_name'=>'Dewanganj Upazila', 'parent_id'=>5],
        ['location_name'=>'Tarail Upazila', 'parent_id'=>6],
        ['location_name'=> 'Pakundia Upazila', 'parent_id'=>6],
        ['location_name'=> 'Nikli Upazila', 'parent_id'=>6],
        ['location_name'=> 'Mithamain Upazila', 'parent_id'=>6],
        ['location_name'=> 'Kuliarchar Upazila', 'parent_id'=>6],
        ['location_name'=> 'Kishoreganj Sadar Upazila', 'parent_id'=>6],
        ['location_name'=> 'Karimganj Upazila', 'parent_id'=>6],
        ['location_name'=> 'Itna Upazila', 'parent_id'=>6],
        ['location_name'=> 'Astagram Upazila', 'parent_id'=>6],
        ['location_name'=> 'Bajitpur Upazila', 'parent_id'=>6],
        ['location_name'=> 'Hossainpur Upazila', 'parent_id'=>6],
        ['location_name'=> 'Bhairab Upazila', 'parent_id'=>6],
        ['location_name'=> 'Katiadi Upazila', 'parent_id'=>6],
        ['location_name'=> 'Kalkini', 'parent_id'=>7],
        ['location_name'=> 'Rajoir', 'parent_id'=>7],
        ['location_name'=> 'Madaripur Sadar', 'parent_id'=>7],
        ['location_name'=> 'Shibchar', 'parent_id'=>7],
        ['location_name'=> 'Harirampur Upazila', 'parent_id'=>8],
        ['location_name'=> 'Manikganj Sadar Upazila', 'parent_id'=>8],
        ['location_name'=> 'Daulatpur Upazila', 'parent_id'=>8],
        ['location_name'=> 'Ghior Upazila', 'parent_id'=>8],
        ['location_name'=> 'Singair Upazila', 'parent_id'=>8],
        ['location_name'=> 'Shibalaya Upazila', 'parent_id'=>8],
        ['location_name'=> 'Saturia Upazila', 'parent_id'=>8],
        ['location_name'=> 'Tongibari Upazila', 'parent_id'=>9],
        ['location_name'=> 'Sirajdikhan Upazila', 'parent_id'=>9],
        ['location_name'=> 'Munshiganj Sadar Upazila', 'parent_id'=>9],
        ['location_name'=> 'Sreenagar Upazila', 'parent_id'=>9],
        ['location_name'=> 'Gazaria Upazila', 'parent_id'=>9],
        ['location_name'=> 'Lohajang Upazila', 'parent_id'=>9],
        ['location_name'=> 'Nandail', 'parent_id'=>10],
        ['location_name'=> 'Phulpur', 'parent_id'=>10],
        ['location_name'=> 'Mymensingh Sadar', 'parent_id'=>10],
        ['location_name'=> 'Ishwarganj', 'parent_id'=>10],
        ['location_name'=> 'Gauripur', 'parent_id'=>10],
        ['location_name'=> 'Gaffargaon', 'parent_id'=>10],
        ['location_name'=> 'Fulbaria', 'parent_id'=>10],
        ['location_name'=> 'Dhobaura', 'parent_id'=>10],
        ['location_name'=> 'Trishal', 'parent_id'=>10],
        ['location_name'=> 'Haluaghat', 'parent_id'=>10],
        ['location_name'=> 'Bhaluka', 'parent_id'=>10],
        ['location_name'=> 'Muktagachha', 'parent_id'=>10],
        ['location_name'=> 'Rupganj Upazila', 'parent_id'=>11],
        ['location_name'=> 'Naryanganj Sadar Upazila', 'parent_id'=>11],
        ['location_name'=> 'Bandar', 'parent_id'=>11],
        ['location_name'=> 'Sonargaon Upazila', 'parent_id'=>11],
        ['location_name'=> 'Araihazar Upazila', 'parent_id'=>11],
        ['location_name'=> 'Siddirgonj Upazila', 'parent_id'=>11],
        ['location_name'=> 'Shibpur Upazila', 'parent_id'=>12],
        ['location_name'=> 'Raipura Upazila, Narsingdi', 'parent_id'=>12],
        ['location_name'=> 'Palash Upazila', 'parent_id'=>12],
        ['location_name'=> 'Narsingdi Sadar Upazila', 'parent_id'=>12],
        ['location_name'=> 'Monohardi Upazila', 'parent_id'=>12],
        ['location_name'=> 'Belabo Upazila', 'parent_id'=>12],
        ['location_name'=> 'Khaliajuri Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Purbadhala Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Netrakona-S Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Mohanganj Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Madan Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Kalmakanda Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Durgapur Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Barhatta Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Atpara Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Kendua Upazilla', 'parent_id'=>13],
        ['location_name'=> 'Rajbari Sadar Upazila', 'parent_id'=>14],
        ['location_name'=> 'Kalukhali Upazila', 'parent_id'=>14],
        ['location_name'=> 'Pangsha Upazila', 'parent_id'=>14],
        ['location_name'=> 'Goalandaghat Upazila', 'parent_id'=>14],
        ['location_name'=> 'Baliakandi Upazila', 'parent_id'=>14],
        ['location_name'=> 'Gosairhat Upazila', 'parent_id'=>15],
        ['location_name'=> 'Bhedarganj Upazila', 'parent_id'=>15],
        ['location_name'=> 'Jajira Upazila', 'parent_id'=>15],
        ['location_name'=> 'Damudya Upazila', 'parent_id'=>15],
        ['location_name'=> 'Shariatpur Sadar -Palong', 'parent_id'=>15],
        ['location_name'=> 'Naria Upazila', 'parent_id'=>15],
        ['location_name'=> 'Sreebardi Upazila', 'parent_id'=>16],
        ['location_name'=> 'Sherpur Sadar Upazila', 'parent_id'=>16],
        ['location_name'=> 'Nalitabari Upazila', 'parent_id'=>16],
        ['location_name'=> 'Nakla Upazila', 'parent_id'=>16],
        ['location_name'=> 'Jhenaigati Upazila', 'parent_id'=>16],
        ['location_name'=> 'Tangail Sadar Upazila', 'parent_id'=>17],
        ['location_name'=> 'Sakhipur Upazila', 'parent_id'=>17],
        ['location_name'=> 'Basail Upazila', 'parent_id'=>17],
        ['location_name'=> 'Madhupur Upazila', 'parent_id'=>17],
        ['location_name'=> 'Ghatail Upazila', 'parent_id'=>17],
        ['location_name'=> 'Kalihati Upazila', 'parent_id'=>17],
        ['location_name'=> 'Dhanbari Upazila', 'parent_id'=>17],
        ['location_name'=> 'Bhuapur Upazila', 'parent_id'=>17],
        ['location_name'=> 'Delduar Upazila', 'parent_id'=>17],
        ['location_name'=> 'Gopalpur Upazila', 'parent_id'=>17],
        ['location_name'=> 'Mirzapur Upazila', 'parent_id'=>17],
        ['location_name'=> 'Nagarpur Upazila', 'parent_id'=>17],
        ['location_name'=> 'Sonatala', 'parent_id'=>18],
        ['location_name'=> 'Shibganj', 'parent_id'=>18],
        ['location_name'=> 'Sariakandi', 'parent_id'=>18],
        ['location_name'=> 'Sahajanpur', 'parent_id'=>18],
        ['location_name'=> 'Nandigram', 'parent_id'=>18],
        ['location_name'=> 'Kahaloo', 'parent_id'=>18],
        ['location_name'=> 'Adamdighi', 'parent_id'=>18],
        ['location_name'=> 'Gabtali', 'parent_id'=>18],
        ['location_name'=> 'Dhupchanchia', 'parent_id'=>18],
        ['location_name'=> 'Dhunat', 'parent_id'=>18],
        ['location_name'=> 'Bogra Sadar', 'parent_id'=>18],
        ['location_name'=> 'Panchbibi', 'parent_id'=>19],
        ['location_name'=> 'Khetlal', 'parent_id'=>19],
        ['location_name'=> 'Kalai', 'parent_id'=>19],
        ['location_name'=> 'Joypurhat S', 'parent_id'=>19],
        ['location_name'=> 'Akkelpur', 'parent_id'=>19],
        ['location_name'=> 'Patnitala Upazila', 'parent_id'=>20],
        ['location_name'=> 'Dhamoirhat Upazila', 'parent_id'=>20],
        ['location_name'=> 'Sapahar Upazila', 'parent_id'=>20],
        ['location_name'=> 'Porsha Upazila', 'parent_id'=>20],
        ['location_name'=> 'Badalgachhi Upazila', 'parent_id'=>20],
        ['location_name'=> 'Atrai Upazila', 'parent_id'=>20],
        ['location_name'=> 'Niamatpur Upazila', 'parent_id'=>20],
        ['location_name'=> 'Raninagar Upazila', 'parent_id'=>20],
        ['location_name'=> 'Manda Upazila', 'parent_id'=>20],
        ['location_name'=> 'Mohadevpur Upazila', 'parent_id'=>20],
        ['location_name'=> 'Naogaon Sadar Upazila', 'parent_id'=>20],
        ['location_name'=> 'Baraigram Upazila', 'parent_id'=>21],
        ['location_name'=> 'Natore Sadar Upazila', 'parent_id'=>21],
        ['location_name'=> 'Lalpur Upazila', 'parent_id'=>21],
        ['location_name'=> 'Bagatipara Upazila', 'parent_id'=>21],
        ['location_name'=> 'Shibganj Upazila', 'parent_id'=>22],
        ['location_name'=> 'Nawabganj Sadar Upazila', 'parent_id'=>22],
        ['location_name'=> 'Nachole Upazila', 'parent_id'=>22],
        ['location_name'=> 'Gomastapur Upazila', 'parent_id'=>22],
        ['location_name'=> 'Bholahat Upazila', 'parent_id'=>22],
        ['location_name'=> 'Sujanagar Upazila', 'parent_id'=>23],
        ['location_name'=> 'Santhia Upazila', 'parent_id'=>23],
        ['location_name'=> 'Pabna Sadar Upazila', 'parent_id'=>23],
        ['location_name'=> 'Ishwardi Upazila', 'parent_id'=>23],
        ['location_name'=> 'Faridpur Upazila', 'parent_id'=>23],
        ['location_name'=> 'Chatmohar Upazila', 'parent_id'=>23],
        ['location_name'=> 'Bhangura Upazila', 'parent_id'=>23],
        ['location_name'=> 'Bera Upazila', 'parent_id'=>23],
        ['location_name'=> 'Atgharia Upazila', 'parent_id'=>23],
        ['location_name'=> 'Godagari', 'parent_id'=>24],
        ['location_name'=> 'Tanore', 'parent_id'=>24],
        ['location_name'=> 'Puthia', 'parent_id'=>24],
        ['location_name'=> 'Paba', 'parent_id'=>24],
        ['location_name'=> 'Mohanpur', 'parent_id'=>24],
        ['location_name'=> 'Durgapur', 'parent_id'=>24],
        ['location_name'=> 'Charghat', 'parent_id'=>24],
        ['location_name'=> 'Bagmara', 'parent_id'=>24],
        ['location_name'=> 'Bagha', 'parent_id'=>24],
        ['location_name'=> 'Chauhali Upazila', 'parent_id'=>25],
        ['location_name'=> 'Ullahpara Upazila', 'parent_id'=>25],
        ['location_name'=> 'Tarash Upazila', 'parent_id'=>25],
        ['location_name'=> 'Shahjadpur Upazila', 'parent_id'=>25],
        ['location_name'=> 'Raiganj Upazila', 'parent_id'=>25],
        ['location_name'=> 'Kazipur Upazila', 'parent_id'=>25],
        ['location_name'=> 'Kamarkhanda Upazila', 'parent_id'=>25],
        ['location_name'=> 'Belkuchi Upazila', 'parent_id'=>25],
        ['location_name'=> 'Sirajganj Sadar Upazila', 'parent_id'=>25],
        ['location_name'=> 'Hakimpur Upazila', 'parent_id'=>26],
        ['location_name'=> 'Kaharole Upazila', 'parent_id'=>26],
        ['location_name'=> 'Khansama Upazila', 'parent_id'=>26],
        ['location_name'=> 'Dinajpur Sadar Upazila', 'parent_id'=>26],
        ['location_name'=> 'Nawabganj', 'parent_id'=>26],
        ['location_name'=> 'Parbatipur Upazila', 'parent_id'=>26],
        ['location_name'=> 'Ghoraghat Upazila', 'parent_id'=>26],
        ['location_name'=> 'Phulbari Upazila', 'parent_id'=>26],
        ['location_name'=> 'Chirirbandar Upazila', 'parent_id'=>26],
        ['location_name'=> 'Bochaganj Upazila', 'parent_id'=>26],
        ['location_name'=> 'Biral Upazila', 'parent_id'=>26],
        ['location_name'=> 'Birganj', 'parent_id'=>26],
        ['location_name'=> 'Birampur Upazila', 'parent_id'=>26],
        ['location_name'=> 'Sadullapur', 'parent_id'=>27],
        ['location_name'=> 'Saghata', 'parent_id'=>27],
        ['location_name'=> 'Sundarganj', 'parent_id'=>27],
        ['location_name'=> 'Palashbari', 'parent_id'=>27],
        ['location_name'=> 'Gaibandha sadar', 'parent_id'=>27],
        ['location_name'=> 'Fulchhari', 'parent_id'=>27],
        ['location_name'=> 'Gobindaganj', 'parent_id'=>27],
        ['location_name'=> 'Char Rajibpur', 'parent_id'=>28],
        ['location_name'=> 'Rowmari', 'parent_id'=>28],
        ['location_name'=> 'Chilmari', 'parent_id'=>28],
        ['location_name'=> 'Ulipur', 'parent_id'=>28],
        ['location_name'=> 'Rajarhat', 'parent_id'=>28],
        ['location_name'=> 'Phulbari', 'parent_id'=>28],
        ['location_name'=> 'Bhurungamari', 'parent_id'=>28],
        ['location_name'=> 'Nageshwari', 'parent_id'=>28],
        ['location_name'=> 'Kurigram Sadar', 'parent_id'=>28],
        ['location_name'=> 'Patgram', 'parent_id'=>29],
        ['location_name'=> 'Hatibandha', 'parent_id'=>29],
        ['location_name'=> 'Kaliganj', 'parent_id'=>29],
        ['location_name'=> 'Aditmari', 'parent_id'=>29],
        ['location_name'=> 'Lalmanirhat Sadar', 'parent_id'=>29],
        ['location_name'=> 'Dimla', 'parent_id'=>30],
        ['location_name'=> 'Domar', 'parent_id'=>30],
        ['location_name'=> 'Kishoreganj', 'parent_id'=>30],
        ['location_name'=> 'Jaldhaka', 'parent_id'=>30],
        ['location_name'=> 'Saidpur', 'parent_id'=>30],
        ['location_name'=> 'Nilphamari Sadar', 'parent_id'=>30],
        ['location_name'=> 'Panchagarh Sadar', 'parent_id'=>31],
        ['location_name'=> 'Debiganj', 'parent_id'=>31],
        ['location_name'=> 'Boda', 'parent_id'=>31],
        ['location_name'=> 'Atwari', 'parent_id'=>31],
        ['location_name'=> 'Tetulia', 'parent_id'=>31],
        ['location_name'=> 'Kaunia', 'parent_id'=>32],
        ['location_name'=> 'Badarganj', 'parent_id'=>32],
        ['location_name'=> 'Mithapukur', 'parent_id'=>32],
        ['location_name'=> 'Gangachara', 'parent_id'=>32],
        ['location_name'=> 'Rangpur Sadar', 'parent_id'=>32],
        ['location_name'=> 'Pirgachha', 'parent_id'=>32],
        ['location_name'=> 'Pirganj', 'parent_id'=>32],
        ['location_name'=> 'Taraganj', 'parent_id'=>32],
        ['location_name'=> 'Baliadangi Upazila', 'parent_id'=>33],
        ['location_name'=> 'Thakurgaon Sadar Upazila', 'parent_id'=>33],
        ['location_name'=> 'Pirganj Upazila', 'parent_id'=>33],
        ['location_name'=> 'Haripur Upazila', 'parent_id'=>33],
        ['location_name'=> 'Ranisankail Upazila', 'parent_id'=>33],
        ['location_name'=> 'Patharghata Upazila', 'parent_id'=>34],
        ['location_name'=> 'Betagi Upazila', 'parent_id'=>34],
        ['location_name'=> 'Barguna Sadar Upazila', 'parent_id'=>34],
        ['location_name'=> 'Bamna Upazila', 'parent_id'=>34],
        ['location_name'=> 'Taltali Upazila', 'parent_id'=>34],
        ['location_name'=> 'Amtali Upazila', 'parent_id'=>34],
        ['location_name'=> 'Gaurnadi Upazila', 'parent_id'=>35],
        ['location_name'=> 'Banaripara Upazila', 'parent_id'=>35],
        ['location_name'=> 'Hizla Upazila', 'parent_id'=>35],
        ['location_name'=> 'Mehendiganj Upazila', 'parent_id'=>35],
        ['location_name'=> 'Wazirpur Upazila', 'parent_id'=>35],
        ['location_name'=> 'Bakerganj Upazila', 'parent_id'=>35],
        ['location_name'=> 'Barisal Sadar Upazila', 'parent_id'=>35],
        ['location_name'=> 'Babuganj Upazila', 'parent_id'=>35],
        ['location_name'=> 'Muladi Upazila', 'parent_id'=>35],
        ['location_name'=> 'Agailjhara Upazila', 'parent_id'=>35],
        ['location_name'=> 'Daulatkhan Upazila', 'parent_id'=>36],
        ['location_name'=> 'Tazumuddin Upazila', 'parent_id'=>36],
        ['location_name'=> 'Manpura Upazila', 'parent_id'=>36],
        ['location_name'=> 'Lalmohan Upazila', 'parent_id'=>36],
        ['location_name'=> 'Char Fasson Upazila', 'parent_id'=>36],
        ['location_name'=> 'Burhanuddin Upazila', 'parent_id'=>36],
        ['location_name'=> 'Bhola Sadar Upazila', 'parent_id'=>36],
        ['location_name'=> 'Nalchity Upazila', 'parent_id'=>37],
        ['location_name'=> 'Rajapur Upazila', 'parent_id'=>37],
        ['location_name'=> 'Jhalokati Sadar Upazila', 'parent_id'=>37],
        ['location_name'=> 'Kathalia Upazila', 'parent_id'=>37],
        ['location_name'=> 'Mirzaganj Upazila', 'parent_id'=>38],
        ['location_name'=> 'Patuakhali Sadar Upazila', 'parent_id'=>38],
        ['location_name'=> 'Rangabali Upazila', 'parent_id'=>38],
        ['location_name'=> 'Dumki Upazila', 'parent_id'=>38],
        ['location_name'=> 'Kalapara Upazila', 'parent_id'=>38],
        ['location_name'=> 'Galachipa Upazila', 'parent_id'=>38],
        ['location_name'=> 'Dashmina Upazila', 'parent_id'=>38],
        ['location_name'=> 'Bauphal Upazila', 'parent_id'=>38],
        ['location_name'=> 'Zianagar', 'parent_id'=>39],
        ['location_name'=> 'Pirojpur Sadar', 'parent_id'=>39],
        ['location_name'=> 'Nazirpur', 'parent_id'=>39],
        ['location_name'=> 'Mathbaria', 'parent_id'=>39],
        ['location_name'=> 'Kaukhali', 'parent_id'=>39],
        ['location_name'=> 'Bhandaria', 'parent_id'=>39],
        ['location_name'=> 'Nesarabad', 'parent_id'=>39],
        ['location_name'=> 'Rowangchhari', 'parent_id'=>40],
        ['location_name'=> 'Ruma', 'parent_id'=>40],
        ['location_name'=> 'Ali kadam', 'parent_id'=>40],
        ['location_name'=> 'Naikhongchhari', 'parent_id'=>40],
        ['location_name'=> 'Lama', 'parent_id'=>40],
        ['location_name'=> 'Thanchi', 'parent_id'=>40],
        ['location_name'=> 'Bandarban Sadar', 'parent_id'=>40],
        ['location_name'=> 'Bancharampur Upazila', 'parent_id'=>41],
        ['location_name'=> 'Bijoynagar Upazila', 'parent_id'=>41],
        ['location_name'=> 'Ashuganj Upazila', 'parent_id'=>41],
        ['location_name'=> 'Akhaura Upazila', 'parent_id'=>41],
        ['location_name'=> 'Kasba Upazila', 'parent_id'=>41],
        ['location_name'=> 'Shahbazpur Town', 'parent_id'=>41],
        ['location_name'=> 'Sarail Upazila', 'parent_id'=>41],
        ['location_name'=> 'Nabinagar Upazila', 'parent_id'=>41],
        ['location_name'=> 'Nasirnagar Upazila', 'parent_id'=>41],
        ['location_name'=> 'Brahmanbaria Sadar Upazila', 'parent_id'=>41],
        ['location_name'=> 'Shahrasti', 'parent_id'=>42],
        ['location_name'=> 'Matlab Dakkhin', 'parent_id'=>42],
        ['location_name'=> 'Matlab Uttar', 'parent_id'=>42],
        ['location_name'=> 'Kachua', 'parent_id'=>42],
        ['location_name'=> 'Haziganj', 'parent_id'=>42],
        ['location_name'=> 'Faridganj', 'parent_id'=>42],
        ['location_name'=> 'Chandpur Sadar', 'parent_id'=>42],
        ['location_name'=> 'Haimchar', 'parent_id'=>42],
        ['location_name'=> 'Patiya Upazila', 'parent_id'=>43],
        ['location_name'=> 'Rangunia Upazila', 'parent_id'=>43],
        ['location_name'=> 'Raozan Upazila', 'parent_id'=>43],
        ['location_name'=> 'Sandwip Upazila', 'parent_id'=>43],
        ['location_name'=> 'Satkania Upazila', 'parent_id'=>43],
        ['location_name'=> 'Sitakunda Upazila', 'parent_id'=>43],
        ['location_name'=> 'Mirsharai Upazila', 'parent_id'=>43],
        ['location_name'=> 'Lohagara Upazila', 'parent_id'=>43],
        ['location_name'=> 'Hathazari Upazila', 'parent_id'=>43],
        ['location_name'=> 'Fatikchhari Upazila', 'parent_id'=>43],
        ['location_name'=> 'Chandanaish Upazila', 'parent_id'=>43],
        ['location_name'=> 'Khulshi', 'parent_id'=>43],
        ['location_name'=> 'Banshkhali Upazila', 'parent_id'=>43],
        ['location_name'=> 'Anwara Upazila', 'parent_id'=>43],
        ['location_name'=> 'Panchlaish', 'parent_id'=>43],
        ['location_name'=> 'Boalkhali Upazila', 'parent_id'=>43],
        ['location_name'=> 'Chittagong Port','parent_id'=>43],
        ['location_name'=> 'Chauddagram Upazila', 'parent_id'=>44],
        ['location_name'=> 'Monohorgonj Upazila', 'parent_id'=>44],
        ['location_name'=> 'Laksam Upazila', 'parent_id'=>44],
        ['location_name'=> 'Comilla Sadar Upazila', 'parent_id'=>44],
        ['location_name'=> 'Homna Upazila', 'parent_id'=>44],
        ['location_name'=> 'Debidwar Upazila', 'parent_id'=>44],
        ['location_name'=> 'Daudkandi Upazila', 'parent_id'=>44],
        ['location_name'=> 'Chandina Upazila', 'parent_id'=>44],
        ['location_name'=> 'Burichong Upazila', 'parent_id'=>44],
        ['location_name'=> 'Brahmanpara Upazila', 'parent_id'=>44],
        ['location_name'=> 'Barura Upazila', 'parent_id'=>44],
        ['location_name'=> 'Meghna Upazila', 'parent_id'=>44],
        ['location_name'=> 'Nangalkot Upazila', 'parent_id'=>44],
        ['location_name'=> 'Comilla Sadar South Upazila', 'parent_id'=>44],
        ['location_name'=> 'Titas Upazila', 'parent_id'=>44],
        ['location_name'=> 'Muradnagar Upazila', 'parent_id'=>44],
        ['location_name'=> 'Kutubdia Upazila', 'parent_id'=>45],
        ['location_name'=> 'Pekua Upazila', 'parent_id'=>45],
        ['location_name'=> 'Ukhia Upazila', 'parent_id'=>45],
        ['location_name'=> 'Teknaf Upazila', 'parent_id'=>45],
        ['location_name'=> 'Ramu Upazila', 'parent_id'=>45],
        ['location_name'=> 'Maheshkhali Upazila', 'parent_id'=>45],
        ['location_name'=> 'Cox\'s Bazar Sadar Upazila', 'parent_id'=>45],
        ['location_name'=> 'Chakaria Upazila', 'parent_id'=>45],
        ['location_name'=> 'Sonagazi', 'parent_id'=>46],
        ['location_name'=> 'Fhulgazi', 'parent_id'=>46],
        ['location_name'=> 'Parshuram', 'parent_id'=>46],
        ['location_name'=> 'Chagalnaiya', 'parent_id'=>46],
        ['location_name'=> 'Feni Sadar', 'parent_id'=>46],
        ['location_name'=> 'Daganbhyan', 'parent_id'=>46],
        ['location_name'=> 'Dighinala Upazila', 'parent_id'=>47],
        ['location_name'=> 'Ramgarh Upazila', 'parent_id'=>47],
        ['location_name'=> 'Panchhari Upazila', 'parent_id'=>47],
        ['location_name'=> 'Matiranga Upazila', 'parent_id'=>47],
        ['location_name'=> 'Mahalchhari Upazila', 'parent_id'=>47],
        ['location_name'=> 'Lakshmichhari Upazila', 'parent_id'=>47],
        ['location_name'=> 'Khagrachhari Upazila', 'parent_id'=>47],
        ['location_name'=> 'Manikchhari Upazila', 'parent_id'=>47],
        ['location_name'=> 'Lakshmipur Sadar Upazila', 'parent_id'=>48],
        ['location_name'=> 'Komol Nagar Upazila', 'parent_id'=>48],
        ['location_name'=> 'Ramgati Upazila', 'parent_id'=>48],
        ['location_name'=> 'Raipur Upazila', 'parent_id'=>48],
        ['location_name'=> 'Ramganj Upazila', 'parent_id'=>48],
        ['location_name'=> 'Chatkhil Upazila', 'parent_id'=>49],
        ['location_name'=> 'Begumganj Upazila', 'parent_id'=>49],
        ['location_name'=> 'Noakhali Sadar Upazila', 'parent_id'=>49],
        ['location_name'=> 'Shenbag Upazila', 'parent_id'=>49],
        ['location_name'=> 'Hatia Upazila', 'parent_id'=>49],
        ['location_name'=> 'Kobirhat Upazila', 'parent_id'=>49],
        ['location_name'=> 'Sonaimuri Upazila', 'parent_id'=>49],
        ['location_name'=> 'Suborno Char Upazila', 'parent_id'=>49],
        ['location_name'=> 'Companyganj Upazila', 'parent_id'=>49],
        ['location_name'=> 'Bagaichhari Upazila', 'parent_id'=>50],
        ['location_name'=> 'Kaptai Upazila', 'parent_id'=>50],
        ['location_name'=> 'Langadu Upazila', 'parent_id'=>50],
        ['location_name'=> 'Nannerchar Upazila', 'parent_id'=>50],
        ['location_name'=> 'Kaukhali Upazila', 'parent_id'=>50],
        ['location_name'=> 'Rajasthali Upazila', 'parent_id'=>50],
        ['location_name'=> 'Juraichhari Upazila', 'parent_id'=>50],
        ['location_name'=> 'Barkal Upazila', 'parent_id'=>50],
        ['location_name'=> 'Rangamati Sadar Upazila', 'parent_id'=>50],
        ['location_name'=> 'Belaichhari Upazila', 'parent_id'=>50],
        ['location_name'=> 'Nabiganj', 'parent_id'=>51],
        ['location_name'=> 'Madhabpur', 'parent_id'=>51],
        ['location_name'=> 'Lakhai', 'parent_id'=>51],
        ['location_name'=> 'Habiganj Sadar', 'parent_id'=>51],
        ['location_name'=> 'Chunarughat', 'parent_id'=>51],
        ['location_name'=> 'Shaistagonj Upazila', 'parent_id'=>51],
        ['location_name'=> 'Bahubal', 'parent_id'=>51],
        ['location_name'=> 'Ajmiriganj', 'parent_id'=>51],
        ['location_name'=> 'Baniachang', 'parent_id'=>51],
        ['location_name'=> 'Sreemangal', 'parent_id'=>52],
        ['location_name'=> 'Rajnagar', 'parent_id'=>52],
        ['location_name'=> 'Kulaura', 'parent_id'=>52],
        ['location_name'=> 'Kamalganj', 'parent_id'=>52],
        ['location_name'=> 'Barlekha', 'parent_id'=>52],
        ['location_name'=> 'Moulvibazar Sadar', 'parent_id'=>52],
        ['location_name'=> 'Juri', 'parent_id'=>52],
        ['location_name'=> 'Sulla', 'parent_id'=>53],
        ['location_name'=> 'Jamalganj', 'parent_id'=>53],
        ['location_name'=> 'Tahirpur', 'parent_id'=>53],
        ['location_name'=> 'Jagannathpur', 'parent_id'=>53],
        ['location_name'=> 'Dowarabazar', 'parent_id'=>53],
        ['location_name'=> 'Dharampasha', 'parent_id'=>53],
        ['location_name'=> 'Derai', 'parent_id'=>53],
        ['location_name'=> 'Chhatak', 'parent_id'=>53],
        ['location_name'=> 'Bishwamvarpur', 'parent_id'=>53],
        ['location_name'=> 'Shanthiganj', 'parent_id'=>53],
        ['location_name'=> 'Sunamganj Sadar', 'parent_id'=>53],
        ['location_name'=> 'Sylhet Sadar', 'parent_id'=>54],
        ['location_name'=> 'Beanibazar', 'parent_id'=>54],
        ['location_name'=> 'Bishwanath', 'parent_id'=>54],
        ['location_name'=> 'Balaganj', 'parent_id'=>54],
        ['location_name'=> 'Companiganj', 'parent_id'=>54],
        ['location_name'=> 'Golapganj', 'parent_id'=>54],
        ['location_name'=> 'Gowainghat', 'parent_id'=>54],
        ['location_name'=> 'Jaintiapur', 'parent_id'=>54],
        ['location_name'=> 'Kanaighat', 'parent_id'=>54],
        ['location_name'=> 'Fenchuganj', 'parent_id'=>54],
        ['location_name'=> 'Zakiganj', 'parent_id'=>54],
        ['location_name'=> 'Nobigonj', 'parent_id'=>54],
        ['location_name'=> 'Dakshin Surma Upazila', 'parent_id'=>54],
        ['location_name'=> 'Chitalmari Upazila', 'parent_id'=>55],
        ['location_name'=> 'Bagerhat Sadar Upazila', 'parent_id'=>55],
        ['location_name'=> 'Fakirhat Upazila', 'parent_id'=>55],
        ['location_name'=> 'Kachua Upazila', 'parent_id'=>55],
        ['location_name'=> 'Mollahat Upazila', 'parent_id'=>55],
        ['location_name'=> 'Mongla Upazila', 'parent_id'=>55],
        ['location_name'=> 'Morrelganj Upazila', 'parent_id'=>55],
        ['location_name'=> 'Rampal Upazila', 'parent_id'=>55],
        ['location_name'=> 'Sarankhola Upazila', 'parent_id'=>55],
        ['location_name'=> 'Chuadanga-S Upazila', 'parent_id'=>56],
        ['location_name'=> 'Jibannagar Upazila', 'parent_id'=>56],
        ['location_name'=> 'Alamdanga Upazila', 'parent_id'=>56],
        ['location_name'=> 'Damurhuda Upazila', 'parent_id'=>56],
        ['location_name'=> 'Manirampur Upazila', 'parent_id'=>57],
        ['location_name'=> 'Sharsha Upazila', 'parent_id'=>57],
        ['location_name'=> 'Jhikargachha Upazila', 'parent_id'=>57],
        ['location_name'=> 'Chaugachha Upazila', 'parent_id'=>57],
        ['location_name'=> 'Abhaynagar Upazila', 'parent_id'=>57],
        ['location_name'=> 'Jessore Sadar Upazila', 'parent_id'=>57],
        ['location_name'=> 'Bagherpara Upazila', 'parent_id'=>57],
        ['location_name'=> 'Keshabpur Upazila', 'parent_id'=>57],
        ['location_name'=> 'Harinakunda Upazila', 'parent_id'=>58],
        ['location_name'=> 'Shailkupa Upazila', 'parent_id'=>58],
        ['location_name'=> 'Kotchandpur Upazila', 'parent_id'=>58],
        ['location_name'=> 'Kaliganj Upazila', 'parent_id'=>58],
        ['location_name'=> 'Maheshpur Upazila', 'parent_id'=>58],
        ['location_name'=> 'Jhenaidah Sadar Upazila', 'parent_id'=>58],
        ['location_name'=> 'Batiaghata Upazila', 'parent_id'=>59],
        ['location_name'=> 'Dacope Upazila', 'parent_id'=>59],
        ['location_name'=> 'Dumuria Upazila', 'parent_id'=>59],
        ['location_name'=> 'Dighalia Upazila', 'parent_id'=>59],
        ['location_name'=> 'Koyra Upazila', 'parent_id'=>59],
        ['location_name'=> 'Paikgachha Upazila', 'parent_id'=>59],
        ['location_name'=> 'Rupsa Upazila', 'parent_id'=>59],
        ['location_name'=> 'Phultala Upazila', 'parent_id'=>59],
        ['location_name'=> 'Terokhada Upazila', 'parent_id'=>59],
        ['location_name'=> 'Mirpur', 'parent_id'=>60],
        ['location_name'=> 'Daulatpur', 'parent_id'=>60],
        ['location_name'=> 'Bheramara', 'parent_id'=>60],
        ['location_name'=> 'Khoksa', 'parent_id'=>60],
        ['location_name'=> 'Kumarkhali', 'parent_id'=>60],
        ['location_name'=> 'Kushtia Sadar', 'parent_id'=>60],
        ['location_name'=> 'Sreepur Upazila', 'parent_id'=>61],
        ['location_name'=> 'Magura Sadar Upazila', 'parent_id'=>61],
        ['location_name'=> 'Mohammadpur Upazila', 'parent_id'=>61],
        ['location_name'=> 'Shalikha Upazila', 'parent_id'=>61],
        ['location_name'=> 'Meherpur-S Upazila', 'parent_id'=>62],
        ['location_name'=> 'angni Upazila', 'parent_id'=>62],
        ['location_name'=> 'Mujib Nagar Upazila', 'parent_id'=>62],
        ['location_name'=> 'Kalia Upazilla', 'parent_id'=>63],
        ['location_name'=> 'Narail-S Upazilla', 'parent_id'=>63],
        ['location_name'=> 'Lohagara Upazilla', 'parent_id'=>63],
        ['location_name'=> 'Shyamnagar Upazila', 'parent_id'=>64],
        ['location_name'=> 'Kaliganj Upazila', 'parent_id'=>64],
        ['location_name'=> 'Kalaroa Upazila', 'parent_id'=>64],
        ['location_name'=> 'Tala Upazila', 'parent_id'=>64],
        ['location_name'=> 'Debhata Upazila', 'parent_id'=>64],
        ['location_name'=> 'Satkhira Sadar Upazila', 'parent_id'=>64],
        ['location_name'=> 'Assasuni Upazila', 'parent_id'=>64]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Location::insert($this->locations);
    }
}
