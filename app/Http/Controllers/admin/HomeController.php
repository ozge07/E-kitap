<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view("admin.home");
    }


    public function settings()
    {
        $data = DB::select('SELECT * FROM settings');
        return view("admin.settings",['data'=>$data]);
    }

    public function settingsupdate(Request $request, $id)
    {
        //Düzenleme formundan gelen verileri veritabanınna update etme


        DB::table('settings')
            ->where('Id',$id)
            ->update(
                ['adi' => $request->adi,
                    'keywords' => $request->keywords,
                    'description' => $request->description,
                    'adres' => $request->adres,
                    'tel' => $request->tel,
                    'smtpserver' => $request->smtpserver,
                    'smtpemail' => $request->smtpemail,
                    'smtppassword' => $request->smtppassword,
                    'smtpport' => $request->smtpport,
                    'iletisim' => $request->iletisim,
                    'hakkimizda' => $request->hakkimizda

                ]);


        return redirect('admin/settings')->with('success','Ayarlar Güncellendi');
    }

    public function messages()
    {
        $data = DB::select('SELECT * FROM messages ORDER BY id DESC');
        return view('admin.mesaj_listesi',['datas'=>$data]);
    }

    public function message_edit($id)
    {
        $data = DB::select('SELECT * FROM messages WHERE id= '.$id);
        return view('admin.mesaj_duzenleme_formu',['veri'=>$data]);
    }

    public function message_destroy($id)
    {
        //Silme
        DB::select('DELETE FROM messages WHERE Id=?',[$id]);
        return redirect('admin/mesajlar')->with('success','Mesaj silindi');

    }

    public function message_update(Request $request, $id)
    {
        //Düzenleme formundan gelen verileri veritabanınna update etme


        DB::table('messages')
            ->where('Id',$id)
            ->update(
                ['note' => $request->note,
                    'status' => 'Okundu'
                ]);


        return redirect('admin/mesajlar')->with('success','Mesaj Güncellendi');
    }


}
