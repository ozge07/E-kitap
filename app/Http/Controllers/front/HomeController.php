<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = DB::select('SELECT * FROM settings');
        $turler = DB::select('SELECT * FROM turler ORDER BY adi');
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $yeniler = DB::select('SELECT * FROM kitaplars ORDER BY adi');
        $popular = DB::select('SELECT * FROM kitaplars ORDER BY Id');
        $menu="home";
        return view("front.home",compact('turler','kategori','popular','yeniler','data','menu'));
    }

    public function urun($id)
    {
        $data = DB::select('SELECT * FROM settings');
        $turler = DB::select('SELECT * FROM turler ORDER BY adi');
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $urun = DB::select('SELECT * FROM kitaplars WHERE Id=?',[$id]);
        $menu="urun";
        return view("front.urun_detay",compact('turler','kategori','urun','menu','data'));
    }

    public function hakkimizda()
    {
        $data = DB::select('SELECT * FROM settings');
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $menu="hakkimizda";
        return view("front.hakkimizda",compact('kategori','data','menu'));
    }

    public function iletisim()
    {
        $data = DB::select('SELECT * FROM settings');
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $menu="iletisim";
        return view("front.iletisim",compact('kategori','data','menu'));
    }

    public function bize_yazin_formu()
    {
        $data = DB::select('SELECT * FROM settings');
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $menu="bizeyazin";
        return view("front.bizeyazin",compact('kategori','data','menu'));
    }
    public function bize_yazin_kaydet(Request $request)
    {
        DB::table('messages')->insert(
            ['adsoy' => $request->adsoy,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'ip' => $request->ip()

            ]);

        return redirect('/bize_yazin')->with('success', 'Mesajınız Başarıyla alınmıştır');
    }

    public function sepete_ekle(Request $request)
    {
        DB::table('sepet')->insert(
            ['kitap_id' => $request->urunid,
                'user_id' => $request->user_id,//Auth::user()->id,
                'miktar' => $request->miktar
            ]);
        $id=$request->urunid;
        return redirect("/urun/$id")->with('success', 'Ürünler Sepete Eklendi');
    }

    public function sepetim()
    {
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $data = DB::select('SELECT * FROM settings');
        $veriler = DB::select('select k.*, s.miktar as miktar
                                    from kitaplars k, sepet s
                                    where k.Id = s.kitap_id');
        $menu="sepetim";
        return view("front.sepetim",compact('veriler','data','kategori','menu'));
    }

    public function sepet_sil($id)
    {
        DB::select('DELETE FROM sepet WHERE Id=?',[$id]);
        return redirect('/sepetim')->with('success','Ürün Sepetten Silindi');
    }

    public function siparis_tamamla(Request $request)
    {
        if($request->isMethod('post')) {
            $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
            $data = DB::select('SELECT * FROM settings');
            $toplam = $request->toplam;
            $menu = "sepet";
            return view("front.siparis_tamamla", compact('toplam', 'data', 'kategori', 'menu'));
            //compact kullanılmazsa (view) sadece iki veri gönderebiliriz,compact ile istediğimiz kadar veri gönderebiliriz
        } else{echo "Hata : Post bilgisi yok"; }
    }

    public function satinal(Request $request)
    {
        $onay=1;
        //kredi kartı bilgilerini al
        //bankaya gönder onay gelirse
        //banka, sayfada ssl sertifikası istiyor
        if($onay==1) {
            DB::table('siparis')->insert(
                ['adsoy' => $request->adsoy,
                    'user_id' => $request->user_id,//Auth::user()->id,
                    'tutar' => $request->toplam,
                    'adres' => $request->adres,
                    'tel' => $request->tel,
                    'sehir' => $request->sehir

                ]);

            $siparisid = DB::getPdo()->lastInsertId();;
            $veriler = DB::select('select k.*, s.miktar as miktar
                                    from kitaplars k, sepet s
                                    where k.Id = s.kitap_id');
            foreach ($veriler as $rs)
            {
                DB::table('siparis_detay')->insert(//bazılarını verilerden bazılarını rs'den alıyoruz
                    ['siparis_id' => $siparisid,
                        'user_id' => $request->user_id,//Auth::user()->id,
                        'kitap_id' => $rs->Id,
                        'fiyat' => $rs->sfiyat,
                        'miktar' => $rs->miktar,
                        'tutar' => $rs->miktar* $rs->sfiyat,
                        'adi' => $rs->adi,

                    ]);
            }
            DB::select('DELETE FROM sepet WHERE Id=?',[$id]);
            return redirect('/siparis_son')->with('success',"Alışveriş İşleminiz Başarıyla Tamamlanmıştır. Teşekkür ederiz");
            //kullanıcıya sipariş ile email gönderilebilir
        } //if banka onay
        else {
            echo "Bankadan onay alınmamıştır. Yetersiz bakiye yada hatalı kart bilgileri";
        }

    }

    public function siparis_son()
    {
        $kategori = DB::select('SELECT * FROM kategori ORDER BY adi');
        $data = DB::select('SELECT * FROM settings');
        $menu = "sepet";
        return view("front.siparis_son", compact('data', 'kategori', 'menu'));
    }


}
