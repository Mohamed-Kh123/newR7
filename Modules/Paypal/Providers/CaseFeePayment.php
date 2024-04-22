<?php

namespace Modules\Paypal\Providers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\ServiceProvider;
use Modules\LegalCaseManagement\Entities\FeesReceipt;

class CaseFeePayment extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['legalcasemanagement::fees.billpay'], function ($view)
        {
            try {
                $ids = \Request::segment(3);
                if(!empty($ids))
                {
                    try {
                        $feesId = Crypt::decrypt($ids);
                        $invoice = FeesReceipt::find($feesId);
                        $company_settings = getCompanyAllSetting($invoice->created_by,$invoice->workspace);
                        $type = 'feesreceipt';
                        if(module_is_active('Paypal', $invoice->created_by) && ((isset($company_settings['paypal_payment_is_on']) ? $company_settings['paypal_payment_is_on']:'off') == 'on') && (isset($company_settings['company_paypal_client_id'])) && (isset($company_settings['company_paypal_secret_key'])))
                        {
                            $view->getFactory()->startPush('invoice_payment_tab', view('paypal::payment.sidebar'));
                            $view->getFactory()->startPush('invoice_payment_div', view('paypal::payment.nav_containt_div',compact('company_settings','invoice','type')));
                        }
                    } catch (\Throwable $th)
                    {

                    }
                }
            } catch (\Throwable $th) {

            }
        });
    }

    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
