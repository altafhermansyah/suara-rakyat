<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TanggapanFixture
 */
class TanggapanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'tanggapan';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'tgl_tanggapan' => '2025-03-18 11:14:49',
                'isi_tanggapan' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'pengaduan_id' => 1,
            ],
        ];
        parent::init();
    }
}
