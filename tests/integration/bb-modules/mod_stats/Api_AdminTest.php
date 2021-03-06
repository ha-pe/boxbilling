<?php
/**
 * @group Core
 */
class Api_Admin_StatsTest extends BBDbApiTestCase
{
    protected $_initialSeedFile = 'orders.xml';
    
    public function testSummary()
    {
        $array = $this->api_admin->stats_get_summary();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_get_summary_income();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_get_orders_statuses();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_get_income_vs_refunds();
        $this->assertInternalType('array', $array);
        
        $array = $this->api_admin->stats_get_product_summary();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_get_product_sales();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_client_countries();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_sales_countries();
        $this->assertInternalType('array', $array);
    }

    public function testGraphs()
    {
        $array = $this->api_admin->stats_get_orders();
        $this->assertInternalType('array', $array);
        
        $array = $this->api_admin->stats_get_clients();
        $this->assertInternalType('array', $array);
        
        $array = $this->api_admin->stats_get_invoices();
        $this->assertInternalType('array', $array);
        
        $array = $this->api_admin->stats_get_refunds();
        $this->assertInternalType('array', $array);

        $array = $this->api_admin->stats_get_income();
        $this->assertInternalType('array', $array);
        
        $array = $this->api_admin->stats_get_tickets();
        $this->assertInternalType('array', $array);
    }
}