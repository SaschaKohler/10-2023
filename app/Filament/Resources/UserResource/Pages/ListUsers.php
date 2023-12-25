<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use App\Models\ZipCode;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\DB;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected int $counter = 0;

    protected function getHeaderActions(): array
    {
        return [

            Actions\CreateAction::make(),

            Actions\Action::make('importCSV')
                ->label('import CSV')
                ->form(
                    [
                    FileUpload::make('import')

                    ]
                )
                ->action(
                    function (array $data) {

                        $filepath = public_path("storage" . "/" . $data['import']);

                        $file = fopen($filepath, "r");

                        $importData_arr = array(); // Read through the file and store the contents as an array
                        $i = 0;
                        //Read the contents of the uploaded file
                        while (($filedata = fgetcsv($file, 1000, ";")) !== false) {
                            $num = count($filedata);

                            // Skip first row (Remove below comment if you want to skip the first row)
                            if ($i == 0) {
                                $i=$i + 2;
                                continue;
                            }
                            for ($c = 0; $c < $num; $c++) {
                                $importData_arr[$i][] = $filedata[$c];
                            }
                            $i++;
                        }
                        fclose($file); //Close after reading

                        foreach ($importData_arr as $importData) {

                            $manager = null;
                            $title2 = null;
                            $name2 = null;
                            $uident = null;
                            $email1 = null;
                            $email = null;

                            $name1 = $importData[4]; //Get user names
                            $name2 = $importData[5];
                            $street = $importData[6];
                            $title1 = $importData[3];
                            //                        $zip = utf8_encode($importData[8]);
                            //                        $city = utf8_encode($importData[9]);
                            $email = $importData[55] ? $importData[55] : null;
                            $uuid = $importData[0];
                            $phone1 = $importData[10] ? $importData[10] : null;

                            $phone2 = $importData[12];
                            $phone3 = $importData[82];

                            $zip = ZipCode::select('id', 'location')
                                ->where('zip', '=', $importData[8])
                                ->pluck('id', 'location')->implode(',');
                            $city = $zip;

                            if ($importData[27] == 'PERSONAL') {
                                $role_id = 2;
                            } elseif ($importData[27] == 'HÄNDLER') {
                                $role_id = 4;
                            } else { $role_id = 3;
                            }

                            if ($importData[3] == 'Firma') {
                                $uident = $importData[50];
                                $role_id = 3;
                                $email1 = $importData[40];
                                $title2 = $importData[16];
                                $manager = $importData[17];
                            } else if ($importData[3] == 'Gemeinde') {
                                $role_id = 3;
                                $email1 = $importData[40];
                                $title2 = $importData[16];
                                $manager = $importData[17];
                            }


                            try {
                                $user_exist = User::query()
                                    ->where('uuid', '=', $uuid)
                                    ->count();
                                if (!$user_exist) {
                                    DB::beginTransaction();
                                    User::create(
                                        [
                                        'uuid' => $uuid,
                                        'street' => $street,
                                        'zip' => $zip,
                                        'city' => $city,
                                        'phone1' => $phone1,
                                        'phone2' => $phone2,
                                        'phone3' => $phone3,
                                        'title1' => $title1,
                                        'email' => $email,
                                        'email1' => $email1,
                                        'role_id' => $role_id,
                                        'uident' => $uident,
                                        'manager' => $manager,
                                        'title2' => $title2,
                                        'name1' => $name1,
                                        'name2' => $name2,
                                        'color' => 'rgb(' . random_int(0, 255) . ','
                                        . random_int(0, 255) . ','
                                        . random_int(0, 255) . ')'

                                        ]
                                    );
                                    DB::commit();
                                    $this->counter++;
                                }

                            } catch (\Exception $e) {
                                dd($e, $importData);
                                DB::rollBack();
                            }
                        }
                        Notification::make()
                            ->title('Import erfolgreich')
                            ->success()
                            ->body("**{$this->counter}** Datensätze importiert")
                            ->send();
                    }
                )
        ];
    }
}
