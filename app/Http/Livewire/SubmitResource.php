<?php

namespace App\Http\Livewire;

use App\Models\Resource;
use Filament\Forms;
use Filament\Notifications\Notification; 
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

class SubmitResource extends Component implements Forms\Contracts\HasForms 
{
    use Forms\Concerns\InteractsWithForms;

    public Resource $resource;

    public $title;
    public $url;
    public $description;
    public $captcha;

    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('title')->required()->rules(['min:3']),
            Forms\Components\TextInput::make('url')->required()->rules(['min:5', 'url']),
            Forms\Components\Textarea::make('description')->required()->rules(['min:20']),
            \Yepsua\Filament\Forms\Components\Captcha::make('captcha')->required()->rules(['min:3']),
            // ...
        ];
    } 

    protected function getFormModel(): string 
    {
        return Resource::class;
    } 

    public function create(): void 
    {
        $formData = $this->form->getState();
        $formData['slug'] = strtolower(Str::slug($formData['title']));
        $formData['image'] = '';
        Resource::create($formData);

        // Notification::make() 
        //     ->title('Saved successfully')
        //     ->success()
        //     ->send();

        $this->title = $this->url = $this->description = $this->captcha = "";
    } 

    private function generateUniqueSlug($value){
        $temp = str_slug($value, '-');
        if(!Resource::all()->where('slug',$temp)->isEmpty()){
            $i = 1;
            $newslug = $temp . '-' . $i;
            while(!Resource::all()->where('slug',$newslug)->isEmpty()){
                $i++;
                $newslug = $temp . '-' . $i;
            }
            $temp =  $newslug;
        }
        return $temp;
    }

    public function render(): View
    {
        return view('livewire.submit-resource');
    }
}
