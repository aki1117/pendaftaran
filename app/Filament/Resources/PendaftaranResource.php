<?php

namespace App\Filament\Resources;

use DateTime;
use Filament\Forms;
use Filament\Tables;
use App\Models\Pendaftaran;
use Filament\Resources\Form;
use Filament\Resources\Table;
use PhpParser\Node\Stmt\Label;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PendaftaranResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    SpatieMediaLibraryFileUpload::make('foto')->collection('pendaftarans'),
                    TextInput::make('nama')->label('Nama'),
                    TextInput::make('daerah_pemilihan'),
                    TextInput::make('nik')->label('NIK'),
                    TextInput::make('tempat-lahir'),
                    DatePicker::make('tanggal-lahir'),
                    Select::make('jenis-kelamin')->options([
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ]),
                    TextInput::make('agama'),
                    TextInput::make('alamat-ktp'),
                    TextInput::make('alamat-domisili'),
                    Select::make('status-perkawinan')->options([
                        'Kawin' => 'Kawin',
                        'Cerai' => 'Cerai',
                        'Belum Kawin' => 'Belum Kawin',
                    ]),
                    TextInput::make('pendidikan-terakhir'),
                    TextInput::make('pekerjaan'),
                    TextInput::make('sd'),
                    TextInput::make('smp'),
                    TextInput::make('sma'),
                    TextInput::make('s1'),
                    TextInput::make('s2'),
                    TextInput::make('s3'),
                    TextInput::make('riwayat-diklat'),
                    TextInput::make('riwayat-organisasi'),
                    TextInput::make('riwayat-pekerjaan'),
                    TextInput::make('riwayat-penghargaan'),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('foto')->collection('pendaftarans'),
                TextColumn::make('id')->sortable(),
                TextColumn::make('nama')->sortable(),
                TextColumn::make('daerah_pemilihan')->sortable(),
                TextColumn::make('nik')->sortable()->label('NIK'),
                TextColumn::make('tempat-lahir')->sortable(),
                TextColumn::make('tanggal-lahir')->sortable(),
                TextColumn::make('jenis-kelamin')->sortable(),
                TextColumn::make('agama')->sortable(),
                TextColumn::make('alamat-ktp')->sortable(),
                TextColumn::make('alamat-domisili')->sortable(),
                TextColumn::make('status-perkawinan')->sortable(),
                TextColumn::make('pendidikan-terakhir')->sortable(),
                TextColumn::make('pekerjaan')->sortable(),
                TextColumn::make('sd')->sortable(),
                TextColumn::make('smp')->sortable(),
                TextColumn::make('sma')->sortable(),
                TextColumn::make('s1')->sortable(),
                TextColumn::make('s2')->sortable(),
                TextColumn::make('s3')->sortable(),
                TextColumn::make('riwayat-diklat')->sortable(),
                TextColumn::make('riwayat-organisasi')->sortable(),
                TextColumn::make('riwayat-pekerjaan')->sortable(),
                TextColumn::make('riwayat-penghargaan')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                FilamentExportHeaderAction::make('export')
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                // FilamentExportBulkAction::make('export')
                // ->label('Export')
                // ->defaultPageOrientation('landscape')
                // ,
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
