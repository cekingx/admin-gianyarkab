<?php

/**
 * @group controller
 */
class Pengumuman_test extends TestCase
{
    public function test_WhenYouAccessPengumumanThenYouGetAllPengumuman()
    {
        $result_array = [
            [
                'pengumuman_id' => 1,
                'pengumuman_judul' => 'Pengumuman1',
                'pengumuman_isi' => 'Isi pengumuman1',
                'pengumuman_tanggal' => '2020-08-21',
                'pengumuman_user_id' => 3
            ],
            [
                'pengumuman_id' => 2,
                'pengumuman_judul' => 'Pengumuman2',
                'pengumuman_isi' => 'Isi pengumuman2',
                'pengumuman_tanggal' => '2020-08-21',
                'pengumuman_user_id' => 3
            ]
        ];

        $this->request->setCallable(
            function ($CI) use ($result_array) {
                $pengumuman_model = $this->getDouble(
                    'Pengumuman_model', ['getAll' => $result_array]
                );
                $CI->pengumuman_model = $pengumuman_model;
            }
        );

        $output = $this->request('GET', '/admin/pengumuman');
        $this->assertContains('Pengumuman1', $output);
        $this->assertContains('Pengumuman2', $output);
    }

    public function test_WhenYouAccessSpecificPengumumanThenYouGetThePengumuman()
    {
        $pengumuman_id = 1;
        $result_array = [
            'pengumuman_id' => $pengumuman_id,
            'pengumuman_judul' => 'Pengumuman1',
            'pengumuman_isi' => 'Isi pengumuman1',
            'pengumuman_tanggal' => '2020-08-21',
            'pengumuman_user_id' => 3
        ];

        $this->request->setCallable(
            function ($CI) use ($result_array) {
                $pengumuman_model = $this->getDouble(
                    'Pengumuman_model', ['getById' => $result_array]
                );
                $CI->pengumuman_model = $pengumuman_model;
            }
        );

        $output = $this->request('GET', "/admin/pengumuman/$pengumuman_id");
        $this->assertContains('Pengumuman1', $output);
        $this->assertContains('Isi pengumuman1', $output);
    }

    public function test_WhenYouAccessNotExistedPengumumanThenYouGet404()
    {
        $pengumuman_id = 1;

        $this->request->setCallable(
            function ($CI) {
                $pengumuman_model = $this->getDouble(
                    'Pengumuman_model', ['getById' => null]
                );
                $CI->pengumuman_model = $pengumuman_model;
            }
        );

        $output = $this->request('GET', "/admin/pengumuman/$pengumuman_id");
        $this->assertResponseCode(404);
    }

    public function test_WhenYouSuccessAddPengumumanThenYouRedirectedToIndex()
    {
        $this->request->setCallable(
            function ($CI) {
                $pengumuman_model = $this->getDouble(
                    'Pengumuman_model', ['save' => true]
                );
                $CI->pengumuman_model = $pengumuman_model;
            }
        );

        $output = $this->request(
            'POST',
            '/admin/pengumuman/store',
            [
                'pengumuman_judul' => 'Pengumuman2',
                'pengumuman_isi' => 'Isi pengumuman2',
                'pengumuman_user_id' => 3
            ]
        );

        $this->assertRedirect('/admin/pengumuman', 302);
    }
}