<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usaStates = [
            "AL" => 'Alabama',
            "AK" => 'Alaska',
            "AZ" => 'Arizona',
            "AR" => 'Arkansas',
            "CA" => 'California',
        ];
        $vietnamStates = [
            'HN' => 'Hà Nội',
            'HG' => 'Hà Giang',
            'CB' => 'Cao Bằng',
            'LC1' => 'Lào Cai',
            'ĐB' => 'Điện Biên',
            'LC2' => 'Lai Châu',
            // 'SL' => 'Sơn La',
            // 'YB' => 'Yên Bái',
            // 'TQ' => 'Tuyên Quang',
            // 'LS' => 'Lạng Sơn',
            // 'QN' => 'Quảng Ninh',
            // 'BG' => 'Bắc Giang',
            // 'PT' => 'Phú Thọ',
            // 'VP' => 'Vĩnh Phúc',
            // 'BN' => 'Bắc Ninh',
            // 'HD' => 'Hải Dương',
            // 'HP' => 'Hải Phòng',
            // 'HY' => 'Hưng Yên',
            // 'TB' => 'Thái Bình',
            // 'HN1' => 'Hà Nam',
            // 'NĐ' => 'Nam Định',
            // 'NB' => 'Ninh Bình',
            // 'TH' => 'Thanh Hóa',
            // 'NA' => 'Nghệ An',
            // 'HT' => 'Hà Tĩnh',
            // 'QB' => 'Quảng Bình',
            // 'QT' => 'Quảng Trị',
            // 'TTH' => 'Thừa Thiên Huế',
            // 'ĐN' => 'Đà Nẵng',
            // 'QN1' => 'Quảng Nam',
            // 'QN2' => 'Quảng Ngãi',
            // 'BĐ' => 'Bình Định',
            // 'PY' => 'Phú Yên',
            // 'KH' => 'Khánh Hòa',
            // 'NT' => 'Ninh Thuận',
            // 'BT' => 'Bình Thuận',
            // 'KT' => 'Kon Tum',
            // 'GL' => 'Gia Lai',
            // 'ĐL' => 'Đắk Lắk',
            // 'ĐN1' => 'Đắk Nông',
            // 'LĐ' => 'Lâm Đồng',
            // 'BP' => 'Bình Phước',
            // 'TN' => 'Tây Ninh',
            // 'BD' => 'Bình Dương',
            // 'ĐN2' => 'Đồng Nai',
            // 'BRVT' => 'Bà Rịa-Vũng Tàu',
            'HCM' => 'Hồ Chí Minh',
            // 'LA' => 'Long An',
            // 'TG' => 'Tiền Giang',
            // 'BT1' => 'Bến Tre',
            // 'TV' => 'Trà Vinh',
            // 'VL' => 'Vĩnh Long',
            // 'ĐT' => 'Đồng Tháp',
            // 'AG' => 'An Giang',
            // 'KG' => 'Kiên Giang',
            // 'CT' => 'Cần Thơ',
            // 'HG1' => 'Hậu Giang',
            // 'ST' => 'Sóc Trăng',
            // 'BL' => 'Bạc Liêu',
            // 'CM' => 'Cà Mau',
        ];
        $hcmDistricts = [
            'Q1' => 'Quận 1',
            'Q2' => 'Quận 2',
            'Q3' => 'Quận 3',
            'Q4' => 'Quận 4',
            'Q5' => 'Quận 5',
            'Q6' => 'Quận 6',
            'Q7' => 'Quận 7',
            'Q8' => 'Quận 8',
            'Q9' => 'Quận 9',
            'Q10' => 'Quận 10',
            'Q11' => 'Quận 11',
            'Q12' => 'Quận 12',
            'QBT1' => 'Quận Bình Tân',
            'QBT' => 'Quận Bình Thạnh',
            'QGV' => 'Quận Gò Vấp',
            'QPN' => 'Quận Phú Nhuận',
            'QTB' => 'Quận Tân Bình',
            'QTP' => 'Quận Tân Phú',
            'QTĐ' => 'Quận Thủ Đức',
        ];
        $hnDistricts = [
            'QBĐ' => 'Quận Ba Đình',
            'QHK' => " Quận Hoàn Kiếm",
            'QHBT' => '  Quận Hai Bà Trưng',
            'QĐĐ' => ' Quận Đống Đa',
            'QCG' => ' Quận Cầu Giấy',
            'QTX' => ' Quận Thanh Xuân',
            'QTH' => 'Quận Tây Hồ',
            'QLB' => 'Quận Long Biên',
            'QNTL' => ' Quận Nam Từ Liêm',
            'QBTL' => ' Quận Bắc Từ Liêm',
            'QHĐ' => 'Quận Hà Đông',
            'QST' => 'Quận Sơn Tây',
        ];
        $dnDistricts = [
            'QBĐ' => 'Quận Sơn Trà',
            'QHBT' => ' Quận Ngũ Hành Sơn',
            'QĐĐ' => ' Quận Hải Châu',
            'QCG' => ' Quận Thanh Khê',
            'QTX' => 'Quận Liên Chiểu',
            'QTH' => 'Huyện Hoà Vang',
        ];
        $countries = [
            // ['code' => 'geo', 'name' => 'Georgia', 'states' => null],
            // ['code' => 'ind', 'name' => 'India', 'states' => null],
            // ['code' => 'usa', 'name' => 'United States of America', 'states' => json_encode($usaStates)],
            // ['code' => 'ger', 'name' => 'Germany', 'states' => null],


            ['code' => 'hcm', 'name' => 'TP. Hồ Chí Minh', 'states' => json_encode($hcmDistricts)],
            ['code' => 'hn', 'name' => 'Hà Nội', 'states' => json_encode($hnDistricts)],
            ['code' => 'dn', 'name' => 'Đà Nẵng', 'states' => json_encode($dnDistricts)],
        ];
        Country::insert($countries);
    }
}