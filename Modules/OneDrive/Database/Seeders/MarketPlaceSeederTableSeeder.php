<?php

namespace Modules\OneDrive\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\LandingPage\Entities\MarketplacePageSetting;


class MarketPlaceSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $data['product_main_banner'] = '';
        $data['product_main_status'] = 'on';
        $data['product_main_heading'] = 'OneDrive';
        $data['product_main_description'] = '<p>Discover the freedom of accessing your OneDrive files directly from Workdo-dash. No more switching between applications or dealing with cumbersome downloads. With this integration, your OneDrive documents, files, and folders are at your fingertips, effortlessly accessible within the Workdo-dash interface. Edit and view a wide range of file types – from Word documents to Excel spreadsheets, text files, and images – using the Viewer/Editor, all without the need to save files locally.</p>';
        $data['product_main_demo_link'] = '#';
        $data['product_main_demo_button_text'] = 'View Live Demo';
        $data['dedicated_theme_heading'] = 'Seamless OneDrive Integration';
        $data['dedicated_theme_description'] = '<p>Experience a new era of efficiency and collaboration with our cutting-edge OneDrive integration.</p>';
        $data['dedicated_theme_sections'] = '[{"dedicated_theme_section_image":"","dedicated_theme_section_status":"on","dedicated_theme_section_heading":"Grid View to Visualize Your Files and Images with Clarity","dedicated_theme_section_description":"<p>Introducing the OneDrive Module Grid View – a dynamic visual hub where your files and images come to life. With seamless integration between Workdo-dash and OneDrive, this innovative feature showcases your documents in a stunning grid layout. Effortlessly browse through your OneDrive files and images right from within our platform, providing an immersive and intuitive experience. Say goodbye to clutter and confusion – our grid view offers clarity at a glance, allowing you to easily locate and access the files that matter most.<\/p>","dedicated_theme_section_cards":{"1":{"title":null,"description":null}}},{"dedicated_theme_section_image":"","dedicated_theme_section_status":"on","dedicated_theme_section_heading":"OneDrive List View","dedicated_theme_section_description":"<p>This feature presents your OneDrive files and images in a sleek and organized list format. Navigating through your documents has never been smoother – effortlessly scroll, search, and locate the files you need, all within the familiar confines of our platform. Simplify your workflow and enhance your productivity as you access, edit, and collaborate on documents, right from the convenience of the List View.<\/p>","dedicated_theme_section_cards":{"1":{"title":null,"description":null}}},{"dedicated_theme_section_image":"","dedicated_theme_section_status":"on","dedicated_theme_section_heading":"Assign OneDrive Folders to Submodules","dedicated_theme_section_description":"<p>Unleash the full potential of collaboration and organization with our groundbreaking feature – the ability to seamlessly link OneDrive folders with submodules. With this innovative enhancement, Workdo-dash empowers you to synchronize your OneDrive documents with specific submodules, ensuring that your files are precisely where you need them. Whether you\'re managing projects, tasks, or any other submodule, this feature lets you effortlessly integrate your essential documents, images, and files.<\/p>","dedicated_theme_section_cards":{"1":{"title":null,"description":null}}},{"dedicated_theme_section_image":"","dedicated_theme_section_status":"on","dedicated_theme_section_heading":"Settings Page for OneDrive Integration","dedicated_theme_section_description":"<p>Streamline your tasks and boost productivity by seamlessly integrating OneDrive into Workdo-dash. Save your OneDrive credentials , choose submodules to enable, and enjoy direct access to your documents and files. Say goodbye to unnecessary app switching and cumbersome downloads – effortlessly edit and view various file types right within the Workdo-dash interface.<\/p>","dedicated_theme_section_cards":{"1":{"title":null,"description":null}}}]';
        $data['dedicated_theme_sections_heading'] = '';
        $data['screenshots'] = '[{"screenshots":"","screenshots_heading":"Box"},{"screenshots":"","screenshots_heading":"Box"},{"screenshots":"","screenshots_heading":"Box"},{"screenshots":"","screenshots_heading":"Box"},{"screenshots":"","screenshots_heading":"Box"}]';
        $data['addon_heading'] = 'Why choose dedicated modulesfor Your Business?';
        $data['addon_description'] = '<p>With Dash, you can conveniently manage all your business functions from a single location.</p>';
        $data['addon_section_status'] = 'on';
        $data['whychoose_heading'] = 'Why choose dedicated modulesfor Your Business?';
        $data['whychoose_description'] = '<p>With Dash, you can conveniently manage all your business functions from a single location.</p>';
        $data['pricing_plan_heading'] = 'Empower Your Workforce with DASH';
        $data['pricing_plan_description'] = '<p>Access over Premium Add-ons for Accounting, HR, Payments, Leads, Communication, Management, and more, all in one place!</p>';
        $data['pricing_plan_demo_link'] = '#';
        $data['pricing_plan_demo_button_text'] = 'View Live Demo';
        $data['pricing_plan_text'] = '{"1":{"title":"Pay-as-you-go"},"2":{"title":"Unlimited installation"},"3":{"title":"Secure cloud storage"}}';
        $data['whychoose_sections_status'] = 'on';
        $data['dedicated_theme_section_status'] = 'on';

        foreach($data as $key => $value){
            if(!MarketplacePageSetting::where('name', '=', $key)->where('module', '=', 'OneDrive')->exists()){
                MarketplacePageSetting::updateOrCreate(
                [
                    'name' => $key,
                    'module' => 'OneDrive'
                ],
                [
                    'value' => $value
                ]);
            }
        }
    }
}
