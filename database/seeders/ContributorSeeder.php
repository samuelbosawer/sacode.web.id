<?php

namespace Database\Seeders;

use App\Models\Contributor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Belinda Pigome',
                'slug' => 'belinda-pigome',
                'job_title' => 'Trainer Assistant, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/belinda-pigome-148894134/',
                'github' => 'https://github.com/belindaelisabeth',
                'picture' => 'contributors/belinda-pigome.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Janzen Faidiban',
                'slug' => 'janzen-faidiban',
                'job_title' => 'Trainer Assistant, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/janzenfaidiban/',
                'github' => 'https://github.com/janzenfaidiban',
                'picture' => 'contributors/janzen-faidiban.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Samuel Bosawer',
                'slug' => 'samuel-bosawer',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/samuel-bosawer-8a278b239/',
                'github' => 'https://github.com/samuelbosawer',
                'picture' => 'contributors/samuel-bosawer.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Efati Geovani Isir',
                'slug' => 'efati-geovani-isir',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/efati-geovani-isir-878757282/?originalSubdomain=id',
                'github' => 'https://github.com/efatigeovaniisir',
                'picture' => 'contributors/efati-isir.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Billy Rumbiak',
                'slug' => 'trainer-speaker-moderator',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/billy-rumbiak-1995juni/',
                'github' => 'https://github.com/billyrumbiak',
                'picture' => 'contributors/billy-rumbiak.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Cristoper Zonggonau',
                'slug' => 'speaker-moderator',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/kristovedus-zonggonau-02607787/',
                'github' => 'https://github.com/zonggonau',
                'picture' => 'contributors/cristoper-zonggonau.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Johan Nasendi',
                'slug' => 'speaker-moderator',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/johannasendi/',
                'github' => 'https://github.com/johan-nasendi',
                'picture' => 'contributors/johan-nasendi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
             [
                'name' => 'Givens Lombo Griapon',
                'slug' => 'givens-lombo-griapon',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/givens-lombo-griapon.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Michael Irarya',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/michel-irarya-25383b30/?originalSubdomain=id',
                'github' => '',
                'picture' => 'contributors/michel-irarya.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Jonas Ualubun',
                'slug' => 'speaker-moderator',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/jonas-ualubun-534a3a150/',
                'github' => '',
                'picture' => 'contributors/jonas-ualubun.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'James Sraun',
                'slug' => 'speaker-moderator',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/jamessraun/?originalSubdomain=id',
                'github' => '',
                'picture' => 'contributors/james-sraum.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nick Imbiri',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/nick-imbiri-a221502b1/',
                'github' => '',
                'picture' => 'contributors/nick-imbri.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Patricia Dianita',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/patriciadianita/?originalSubdomain=id',
                'github' => '',
                'picture' => 'contributors/patricia-dianita.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Noval Nauw',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/noval-nauw-2b352413b/',
                'github' => 'https://github.com/novalsmith',
                'picture' => 'contributors/noval-nauw.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Obi Pranata',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/obi-pranata-47349b196/',
                'github' => 'https://github.com/obipranata',
                'picture' => 'contributors/obi-pranata.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Stenly Samberi',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/stenly-samberi-a79813250/?originalSubdomain=id',
                'github' => 'https://github.com/stenlysamberi',
                'picture' => 'contributors/stenly-samberi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nico Koibur',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/nico-koibur-49b80649/',
                'github' => 'https://github.com/nicokoibur',
                'picture' => 'contributors/nico-koibur.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Israil Ondi',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/israil-ondi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nurvirta Monarizqa',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/nurvirta-monarizqa.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Pascal Sapari',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/pascal-safari-076aab2aa/?originalSubdomain=cd',
                'github' => '',
                'picture' => 'contributors/pascal-sapari.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Rendi Bayu Setiawan',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/rendi-bayu-setiawan-b968b4253/?originalSubdomain=id',
                'github' => '',
                'picture' => 'contributors/rendi-bayu-setiawan.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Sulenias Asso',
                'slug' => 'sepaker-moderator',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/suleniash-asso-85a864240/',
                'github' => 'https://github.com/sulenias',
                'picture' => 'contributors/sulenias-asso.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Theis Andatu',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => 'https://github.com/antheiz',
                'picture' => 'contributors/theis-andatu.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Vicky Irmanto',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/vicky-irmanto-7a5b971a0/?originalSubdomain=id',
                'github' => '',
                'picture' => 'contributors/vicky-irmanto.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Sugeng',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/sugeng.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yoshua Gombo',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/yoshua-gombo/',
                'github' => '',
                'picture' => 'contributors/yoshua-gombo.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yose Giyay',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/yose-marthin-giyay-22241b151/',
                'github' => 'https://github.com/yohn-maistre',
                'picture' => 'contributors/yose-giyay.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yan Heluka',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/yan-heluka.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'William Silalahi',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/william-silalahi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Jonathan Smith',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/jonathan-smith-2a12aa36/',
                'github' => '',
                'picture' => 'contributors/jonathan-smith.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Ricky Pekei',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/rickypekei/?locale=in_ID',
                'github' => '',
                'picture' => 'contributors/riky-pekei.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Vicky Irmanto',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/vicky-irmanto-7a5b971a0/?originalSubdomain=id',
                'github' => '',
                'picture' => 'contributors/vicky-irmanto.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nae Unani',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/nae-unani.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Ian Carlos',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/ian-carlos.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Daniel Pepuho',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/daniel-pepuho/?trk=public_profile_browsemap&originalSubdomain=id',
                'github' => 'https://github.com/danielcristho',
                'picture' => 'contributors/daniel-pepuho.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Agnes Suyanto',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/agnes-huberta-suyanto-0a4393135/',
                'github' => '',
                'picture' => 'contributors/agnes-suyanto.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Akira Rizky',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/akira-rizky-555297207/?originalSubdomain=id',
                'github' => 'https://github.com/AkiraRizky',
                'picture' => 'contributors/akira-rizky.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Daniel Sedik',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/daniel-sedik/?originalSubdomain=id',
                'github' => 'https://github.com/danielsedik',
                'picture' => 'contributors/daniel-sedik.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Elly Ansek',
                'slug' => 'trainer-speaker-moderator',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => '',
                'github' => 'https://github.com/ellyansek18',
                'picture' => 'contributors/ally-ansek.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Haris Djafar',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/haris-djafar-751923129/',
                'github' => 'https://github.com/abduldjafar',
                'picture' => 'contributors/haris-djafar.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Hendrik Eka',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/hendrik-eka.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Wahyu Boseren',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'contributors/wahyu-boseren.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Brian Unani',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/brian-unani-223731147/',
                'github' => '',
                'picture' => 'contributors/brian-unani.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],


        ])->each(function ($collection) {
            Contributor::create($collection);
        });
    }
}
