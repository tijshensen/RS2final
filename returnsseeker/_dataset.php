<?php
/*Title project*/
$title = "ReturnsSeeker";
$pagetitle = $title . ".com V1";
$logo = "./svg/logo-header.svg";

/*Providers list*/
$rs_providers_list = array(
    array (
        'pl-filters' => ' ',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Betterment',
        'pl-logo' => 'company-logo-Betterment.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$1-$9',
        'pl-period' => 'Per month',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free',
        'pl-benefit-description' => ' ',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => '<img src="./img/top-1.png" alt=""> '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Ellevest',
        'pl-logo' => 'company-logo-Ellevest.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.25%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$5,000 Amount of assets ',
        'pl-benefit-description' => 'managed for free',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Wealthfront',
        'pl-logo' => 'company-logo-WealthFront.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'SoFi Automated Investing',
        'pl-logo' => 'company-logo-SoFi.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0%',
        'pl-period' => 'Per month',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling  ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Bloom',
        'pl-logo' => 'company-logo-Bloom.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.25%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$15 register in August',
        'pl-benefit-description' => 'managed for free',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Fundrise',
        'pl-logo' => 'company-logo-Fundrise.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '1%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free ',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'DiversyFund',
        'pl-logo' => 'company-logo-DiversyFundLogo.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '$1',
        'pl-period' => 'Management fee',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $2,500 cash credit  ',
        'pl-benefit-description' => 'with a qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Crowdstreet',
        'pl-logo' => 'company-logo-crowdstreet.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '0.50% to 2.5%',
        'pl-period' => 'for funds; project fees vary',
        'pl-adition' => '$25.000 account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => ' Free career counseling ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Equity Multiple',
        'pl-logo' => 'company-logo-EquityMultiple_logo.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '1%',
        'pl-period' => 'Other fees apply',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $200 ',
        'pl-benefit-description' => 'in transfer Fee rebates',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Yieldstreet',
        'pl-logo' => 'company-logo-YSLogo.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '1% to 2%',
        'pl-period' => 'Management fees; other fees apply.',
        'pl-adition' => '$10,000 Minimum account',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$50 - $3,500 in cash ',
        'pl-benefit-description' => 'with qualifying deposit.',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),

    
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Marcus by Goldman Sachs Online Savings Account',
        'pl-logo' => 'company-logo-MarcusByGoldmanSachs.png',
        'pl-price-title' => 'APY',
        'pl-price' => '1.05%',
        'pl-period' => 'Per trade',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'American Express National Bank Personal Savings',
        'pl-logo' => 'company-logo-ps.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '1.00%',
        'pl-period' => '',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $2,500 cash credit ',
        'pl-benefit-description' => 'with a qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'HSBC Direct Savings',
        'pl-logo' => 'company-logo-hsbc.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.70%',
        'pl-period' => 'With $1 minimum balance',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Alliant Credit Union High-Rate Savings',
        'pl-logo' => 'company-logo-aliant.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.75%',
        'pl-period' => 'With $100 minimum balance',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $200',
        'pl-benefit-description' => 'in transfer Fee rebates',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'FNBO Direct Online Savings Account',
        'pl-logo' => 'company-logo-fd.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.90%',
        'pl-period' => 'With $1 minimum balance',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$50 - $3,500 in cash',
        'pl-benefit-description' => 'with qualifying deposit.',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Interactive Brokers',
        'pl-logo' => 'company-logo-InteractiveBrokers.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'TradeStation',
        'pl-logo' => 'company-logo-TradeStation.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $2,500 cash credit ',
        'pl-benefit-description' => 'with a qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Zack Trade',
        'pl-logo' => 'company-logo-ZacksTrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0.01',
        'pl-period' => 'Per share',
        'pl-adition' => '$2.500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'First Trade',
        'pl-logo' => 'company-logo-Firstrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $200',
        'pl-benefit-description' => 'in transfer Fee rebates',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Ally Invest',
        'pl-logo' => 'company-logo-allyinvest.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$50 - $3,500 in cash',
        'pl-benefit-description' => 'with qualifying deposit.',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    // array (
    //     'pl-filters' => '',
    //     'pl-label' => 'Robo Advisors',
    //     'pl-name' => '',
    //     'pl-logo' => '.png',
    //     'pl-price-title' => 'Commision',
    //     'pl-price' => '$0',
    //     'pl-period' => 'Per share',
    //     'pl-adition' => '$0 Account minimum',
    //     'pl-benefit-title' => 'Benefit',
    //     'pl-benefit-name' => '',
    //     'pl-benefit-description' => '',
    //     'pl-top-label-left' => ' ',
    //     'pl-top-label-right' => ' '
    // ),
);

$rs_list_crypto_currency = array(
    array (
        'pl-filters' => ' ',
        'pl-name' => 'Coinbase',
        'pl-logo' => 'company-logo-Coinbase.png',
        'pl-methods-title' => 'Deposit methods',
        'pl-methods-description' => 'Credit card, debit card, bank transfer, Paypal, crypto',
        'pl-fiat-title' => 'Fiat Accepted',
        'pl-fiat-description' => 'USD, EUR, GBP, AUD, CAD & many more',
        'pl-crypto-title' => 'Crypto Supported',
        'pl-crypto-description' => 'BTC, ETH, XRP, LTC, BCH, ETC, ZEC, BAT, USDC, ZRX',
        'pl-top-label-left' => ' <img src="./img/top.png" alt=""> ',
        'pl-top-label-right' => ''
    ),
    array (
        'pl-filters' => ' ',
        'pl-name' => 'Binance',
        'pl-logo' => 'company-logo-binance.png',
        'pl-methods-title' => 'Deposit methods',
        'pl-methods-description' => 'Crypto',
        'pl-fiat-title' => 'Fiat Accepted',
        'pl-fiat-description' => 'None',
        'pl-crypto-title' => 'Crypto Supported',
        'pl-crypto-description' => 'BTC, BNB, ETH, EOS, XLM, ADA, LTC, XRP & 140+ more altcoins	',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ''
    ),
    array (
        'pl-filters' => ' ',
        'pl-name' => 'FTX',
        'pl-logo' => 'company-logo-download.png',
        'pl-methods-title' => 'Deposit methods',
        'pl-methods-description' => 'BTC, ETH, Stable coins	',
        'pl-fiat-title' => 'Fiat Accepted',
        'pl-fiat-description' => 'None',
        'pl-crypto-title' => 'Crypto Supported',
        'pl-crypto-description' => 'BTC, ETH, LTC,BCH	',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => ' ',
        'pl-name' => 'CEX.io',
        'pl-logo' => 'company-logo-cex.png',
        'pl-methods-title' => 'Deposit methods',
        'pl-methods-description' => 'Credit card, debit card, bank transfer, crypto	',
        'pl-fiat-title' => 'Fiat Accepted',
        'pl-fiat-description' => 'USD, EUR, GBP, RUB	',
        'pl-crypto-title' => 'Crypto Supported',
        'pl-crypto-description' => 'BTC, ETH, XLM, XRP, LTC, BCH, DASH, ZEC, BTG, GUSD	',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ''
    ),
);

$rs_robo_advisors = array(
    array (
        'pl-filters' => ' ',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Betterment',
        'pl-logo' => 'company-logo-Betterment.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$1-$9',
        'pl-period' => 'Per month',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free',
        'pl-benefit-description' => ' ',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => '<img src="./img/top-1.png" alt=""> '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Ellevest',
        'pl-logo' => 'company-logo-Ellevest.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.25%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$5,000 Amount of assets ',
        'pl-benefit-description' => 'managed for free',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Wealthfront',
        'pl-logo' => 'company-logo-WealthFront.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'SoFi Automated Investing',
        'pl-logo' => 'company-logo-SoFi.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0%',
        'pl-period' => 'Per month',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling  ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Bloom',
        'pl-logo' => 'company-logo-Bloom.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.25%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$15 register in August',
        'pl-benefit-description' => 'managed for free',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
);

$rs_list_estate_investments = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Fundrise',
        'pl-logo' => 'company-logo-Fundrise.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '1%',
        'pl-period' => 'Management fee',
        'pl-adition' => '$500 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free ',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'DiversyFund',
        'pl-logo' => 'company-logo-DiversyFundLogo.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '$1',
        'pl-period' => 'Management fee',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $2,500 cash credit  ',
        'pl-benefit-description' => 'with a qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Crowdstreet',
        'pl-logo' => 'company-logo-crowdstreet.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '0.50% to 2.5%',
        'pl-period' => 'for funds; project fees vary',
        'pl-adition' => '$25.000 account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => ' Free career counseling ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Equity Multiple',
        'pl-logo' => 'company-logo-EquityMultiple_logo.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '1%',
        'pl-period' => 'Other fees apply',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $200 ',
        'pl-benefit-description' => 'in transfer Fee rebates',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Yieldstreet',
        'pl-logo' => 'company-logo-YSLogo.png',
        'pl-price-title' => 'Fees',
        'pl-price' => '1% to 2%',
        'pl-period' => 'Management fees; other fees apply.',
        'pl-adition' => '$10,000 Minimum account',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$50 - $3,500 in cash ',
        'pl-benefit-description' => 'with qualifying deposit.',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
);

$rs_list_savings_account = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Marcus by Goldman Sachs Online Savings Account',
        'pl-logo' => 'company-logo-MarcusByGoldmanSachs.png',
        'pl-price-title' => 'APY',
        'pl-price' => '1.05%',
        'pl-period' => 'Per trade',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '1 Month free',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'American Express National Bank Personal Savings',
        'pl-logo' => 'company-logo-ps.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '1.00%',
        'pl-period' => '',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $2,500 cash credit ',
        'pl-benefit-description' => 'with a qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'HSBC Direct Savings',
        'pl-logo' => 'company-logo-hsbc.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.70%',
        'pl-period' => 'With $1 minimum balance',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Free career counseling ',
        'pl-benefit-description' => 'Plus loan discounts with qualifying deposit',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Alliant Credit Union High-Rate Savings',
        'pl-logo' => 'company-logo-aliant.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.75%',
        'pl-period' => 'With $100 minimum balance',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Up to $200',
        'pl-benefit-description' => 'in transfer Fee rebates',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'FNBO Direct Online Savings Account',
        'pl-logo' => 'company-logo-fd.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '0.90%',
        'pl-period' => 'With $1 minimum balance',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '$50 - $3,500 in cash',
        'pl-benefit-description' => 'with qualifying deposit.',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    )
);

$rs_list_online_brokers = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Interactive Brokers',
        'pl-logo' => 'company-logo-InteractiveBrokers.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'TradeStation',
        'pl-logo' => 'company-logo-TradeStation.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Zack Trade',
        'pl-logo' => 'company-logo-ZacksTrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'First Trade',
        'pl-logo' => 'company-logo-Firstrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Ally Invest',
        'pl-logo' => 'company-logo-allyinvest.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    )
);

$rs_list_financial_advisors = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Interactive Brokers',
        'pl-logo' => 'company-logo-InteractiveBrokers.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'TradeStation',
        'pl-logo' => 'company-logo-TradeStation.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Zack Trade',
        'pl-logo' => 'company-logo-ZacksTrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'First Trade',
        'pl-logo' => 'company-logo-Firstrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Ally Invest',
        'pl-logo' => 'company-logo-allyinvest.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
);

$rs_list_art_investments = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Interactive Brokers',
        'pl-logo' => 'company-logo-InteractiveBrokers.png',
        'pl-price-title' => 'Minimum Investment',
        'pl-price' => '$1,000',
        'pl-period' => '',
        'pl-adition' => 'Buy fractional shares for $20',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Outperformed the S&P 500 by over 250% ',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
);

$rs_list_microlending = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Interactive Brokers',
        'pl-logo' => 'company-logo-InteractiveBrokers.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'TradeStation',
        'pl-logo' => 'company-logo-TradeStation.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Zack Trade',
        'pl-logo' => 'company-logo-ZacksTrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'First Trade',
        'pl-logo' => 'company-logo-Firstrade.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
    array (
        'pl-filters' => 'First Trade',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Ally Invest',
        'pl-logo' => 'company-logo-allyinvest.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '$0',
        'pl-period' => 'Per share',
        'pl-adition' => '$0 Account minimum',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => '',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
);

$rs_list_business_investments = array(
    array (
        'pl-filters' => '',
        'pl-label' => 'Robo Advisors',
        'pl-name' => 'Brickfly',
        'pl-logo' => 'logo-menu-brickfy.png',
        'pl-price-title' => 'Commision',
        'pl-price' => '12.5% a year on average*',
        'pl-period' => '',
        'pl-adition' => '',
        'pl-benefit-title' => 'Benefit',
        'pl-benefit-name' => 'Best rates',
        'pl-benefit-description' => '',
        'pl-top-label-left' => ' ',
        'pl-top-label-right' => ' '
    ),
);


/*Providers*/
$rs_providers_cards = array(
    array(
		'provider_filters' => 'filter-anxiety filter-cellulitus filter-sleep',
        'provider_logo' => 'partner-logo-1.png',
        'provider_label' => 'Featured',
        'provider_label_class' => 'bg-green',
        'provider_title' => 'Lemonaid Health',
        'provider_doctor' => "Online Doctor",
        'provider_category' => "Online pharmacy",
		'provider_why' => "Finally have a team that helps you improve your health without following a no-carb diet or tracking calories.",
		'provider_spec' => "Erectile Dysfunction, Stop Smoking, Hot Flashes, Anxiety",
        'provider_price' => '$50 OFF',
        'provider_promo' => 'Springsale',
        'provider_old' => '$95',
        'provider_number' => '1',
        'provider_conditions' => '19 Treatments',
        'provider_services' => 'Doctor, Pharmacy, Therapy, Clinic',
        'provider_insurance' => 'Accepted',
        'provider_hs' => 'No'
    ),
    array(
		'provider_filters' => '',
        'provider_logo' => 'partner-logo-2.png',
        'provider_label' => 'Most visited',
        'provider_label_class' => 'bg-red',
        'provider_title' => 'Talkspace',
        'provider_doctor' => "Online Doctor",
        'provider_category' => "Online pharmacy",
		'provider_why' => "Finally have a team that helps you improve your health without following a no-carb diet or tracking calories.",
		'provider_spec' => "Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety",
        'provider_price' => '$20 OFF',
        'provider_promo' => 'Summer',
        'provider_old' => '$95',
        'provider_number' => '2',
        'provider_conditions' => '19 Treatments',
        'provider_services' => 'Doctor, Pharmacy, Therapy, Clinic',
        'provider_insurance' => 'Accepted',
        'provider_hs' => 'No'
    ),
    array(
		'provider_filters' => '',
        'provider_logo' => 'partner-logo-3.png',
        'provider_label' => 'First visit free',
        'provider_label_class' => 'bg-pink',
        'provider_title' => 'Betterhelp',
        'provider_doctor' => "Online Doctor",
        'provider_category' => "Online pharmacy",
		'provider_why' => "Finally have a team that helps you improve your health without following a no-carb diet or tracking calories.",
		'provider_spec' => "Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety",
        'provider_price' => '$20 OFF',
        'provider_promo' => 'Summer',
        'provider_old' => '$95',
        'provider_number' => '3',
        'provider_conditions' => '19 Treatments',
        'provider_services' => 'Doctor, Pharmacy, Therapy, Clinic',
        'provider_insurance' => 'Accepted',
        'provider_hs' => 'No'
    ),
    array(
		'provider_filters' => '',
        'provider_logo' => 'partner-logo-4.png',
        'provider_label' => 'First visit free',
        'provider_label_class' => 'bg-pink',
        'provider_title' => 'Hims',
        'provider_doctor' => "Online Doctor",
        'provider_category' => "Online pharmacy",
		'provider_why' => "Finally have a team that helps you improve your health without following a no-carb diet or tracking calories.",
		'provider_spec' => "Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety",
        'provider_price' => '$20 OFF',
        'provider_promo' => 'Summer',
        'provider_old' => '$95',
        'provider_number' => '4',
        'provider_conditions' => '19 Treatments',
        'provider_services' => 'Doctor, Pharmacy, Therapy, Clinic',
        'provider_insurance' => 'Accepted',
        'provider_hs' => 'No'
    ),
    array(
		'provider_filters' => '',
        'provider_logo' => 'partner-logo-5.png',
        'provider_label' => 'First visit free',
        'provider_label_class' => 'bg-pink',
        'provider_title' => 'Keeps',
        'provider_doctor' => "Online Doctor",
        'provider_category' => "Online pharmacy",
		'provider_why' => "Finally have a team that helps you improve your health without following a no-carb diet or tracking calories.",
		'provider_spec' => "Erectile Dysfnction, Stop Smoking, Hot Flashes, Anxiety",
        'provider_price' => '$20 OFF',
        'provider_promo' => 'Summer',
        'provider_old' => '$95',
        'provider_number' => '5',
        'provider_conditions' => '19 Treatments',
        'provider_services' => 'Doctor, Pharmacy, Therapy, Clinic',
        'provider_insurance' => 'Accepted',
        'provider_hs' => 'No'
    ),
);

$rs_search_cards = array(
    array(
        'search_c_img' => 'link-card-1.png',
        'search_c_title' => 'Get Care Now',
        'search_c_description' => 'Search by category to find the best online care providers.',
        'search_c_btn' => 'SEARCH BY CATEGORY',
    ),
    array(
        'search_c_img' => 'link-card-2.png',
        'search_c_title' => 'Compare & Save',
        'search_c_description' => 'Search by Treatment to find the right provider for you.',
        'search_c_btn' => 'Search by treatment',
    ),
    array(
        'search_c_img' => 'link-card-3.png',
        'search_c_title' => 'Know Your Options',
        'search_c_description' => 'Search by condition to discover every available online treatment.',
        'search_c_btn' => 'Search by condition',
    ),
);

/* LINK PROVIDER */ 
$rs_provider_link = array(
    array(
        'provider_logo' => 'partner-logo-1.png',
    ),
    array(
        'provider_logo' => 'partner-logo-2.png',
    ),
    array(
        'provider_logo' => 'partner-logo-3.png',
    ),
    array(
        'provider_logo' => 'partner-logo-4.png',
    ),
    array(
        'provider_logo' => 'partner-logo-5.png',
    ),
    array(
        'provider_logo' => 'partner-logo-6.png',
    ),
    array(
        'provider_logo' => 'partner-logo-7.png',
    ),
    array(
        'provider_logo' => 'partner-logo-8.png',
    ),
    array(
   	 	'provider_logo' => 'partner-logo-9.png',
	),
    array(
		'provider_logo' => 'partner-logo-10.png',
    ),
    array(
		'provider_logo' => 'partner-logo-11.png',
    ),
);
/*News*/

$rs_news_cards = array(
    array(
        'news_img' => 'news01',
        'news_label' => 'Micro Lending',
        'news_label_class' => 'purple',
        'news_title' => '26 Home Products That May Trick People Into Thinking You Have Your Life Together.',
        'news_category' => "Men's health",
        'news_author' => 'By Jon Bon Jovi',
        'news_date' => '05/07/20',
        'news_time' => 'March 25th, 2020'
    ),
    array(
        'news_img' => 'news02',
        'news_label' => 'Financial advisors',
        'news_label_class' => 'red',
        'news_title' => '15 Things you haven’t heard of people believe works against COVID19',
        'news_category' => "Men's health",
        'news_author' => 'By Jon Bon Jovi',
        'news_date' => '05/07/20',
        'news_time' => 'March 25th, 2020'
    ),
    array(
        'news_img' => 'news03',
        'news_label' => 'Business investing',
        'news_label_class' => 'green',
        'news_title' => 'How spending more time with your children can improve your health.',
        'news_category' => "Men's health",
        'news_author' => 'By Jon Bon Jovi',
        'news_date' => '05/07/20',
        'news_time' => 'March 25th, 2020'
    ),
    array(
        'news_img' => 'news01',
        'news_label' => 'Cryptocurrency',
        'news_label_class' => 'green',
        'news_title' => 'If Bitcoin Crashes Below $10,000 It’s All Over—Here’s Why.',
        'news_category' => "Men's health",
        'news_author' => 'By Jon Bon Jovi',
        'news_date' => '05/07/20',
        'news_time' => 'March 25th, 2020'
    )
);



/*Guides*/
$rs_guides_cards = array(
    array(
        'guide_title' => 'Robo Advisors',
        'guide_svg' => 'robo-advisors.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-robo-advisors.php',
    ),
    array(
        'guide_title' => 'Real Estate',
        'guide_svg' => 'real-estate.svg',
        'guide_counts' => '22',
		'guide_url' => 'page-list-real-estate-investments.php',
    ),
    array(
        'guide_title' => 'Savings',
        'guide_svg' => 'savings.svg',
        'guide_counts' => '2',
		'guide_url' => 'page-list-savings-account.php',
	),
	array(
        'guide_title' => 'Micro Lending ',
        'guide_svg' => 'micro-lending.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-microlending.php',
	),
	array(
        'guide_title' => 'Financial Advisors',
        'guide_svg' => 'financial-advisors.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-financial-advisors.php',
	),
	array(
        'guide_title' => 'Business Investing',
        'guide_svg' => 'business-investing.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-business-investments.php',
	),
	array(
        'guide_title' => 'Online Brokers',
        'guide_svg' => 'online-brokers.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-online-brokers.php',
	), 
	array(
        'guide_title' => 'Crypto Currency',
        'guide_svg' => 'crypto.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-crypto-currency.php',
        ), 
	array(
        'guide_title' => 'Art',
        'guide_svg' => 'art.svg',
        'guide_counts' => '12',
		'guide_url' => 'page-list-art-investments.php',
        ), 
);


$rs_provider_alphabet = range('a', 'z');



$rs_insurances = array(
    array(
        'filter' => 'insurance-yes',
        'name' => 'Accepts Insurance',
    ),
    array(
        'filter' => 'insurance-no',
        'name' => 'Not Accepted',
    ),
);




$rs_investment = array(
    array(
		'filter' => '<501',
        'name' => '<501',
    ),
    array(
		'filter' => '<1001',
        'name' => '<1001',
    ),
    array(
		'filter' => '<2001',
        'name' => '<2001',
    ),
    array(
		'filter' => '<5001',
        'name' => '<5001',
    ),
    array(
		'filter' => '>5000',
        'name' => '>5000',
    )
);

$rs_deposit_methods = array(
    array(
        'filter' => 'Credit card',
        'name' => 'Credit card',
    ),
    array(
        'filter' => 'debit card',
        'name' => 'debit card',
    ),
    array(
        'filter' => 'bank transfer',
        'name' => 'bank transfer',
    ),
    array(
        'filter' => 'Paypal',
        'name' => 'Paypal',
    ),
    array(
        'filter' => 'crypto',
        'name' => 'crypto',
    ),
    array(
        'filter' => 'BTC',
        'name' => 'BTC',
    ),
    array(
        'filter' => 'ETH',
        'name' => 'ETH',
    ),
    array(
        'filter' => 'Stable coins',
        'name' => 'Stable coins',
    ),
);

$rs_fiat_accepted = array(
    array(
        'filter' => 'USD',
        'name' => 'USD',
    ),
    array(
        'filter' => 'EUR',
        'name' => 'EUR',
    ),
    array(
        'filter' => 'GBP',
        'name' => 'GBP',
    ),
    array(
        'filter' => 'AUD',
        'name' => 'AUD',
    ),
    array(
        'filter' => 'CAD',
        'name' => 'CAD',
    ),
    array(
        'filter' => 'RUB',
        'name' => 'RUB',
    ),
);
$rs_crypto_supported = array(
    array(
        'filter' => 'BTC',
        'name' => 'BTC',
    ),
    array(
        'filter' => 'ETH',
        'name' => 'ETH',
    ),
    array(
        'filter' => 'XRP',
        'name' => 'XRP',
    ),
    array(
        'filter' => 'LTC',
        'name' => 'LTC',
    ),
    array(
        'filter' => 'BCH',
        'name' => 'BCH',
    ),
    array(
        'filter' => 'ETC',
        'name' => 'ETC',
    ),
    array(
        'filter' => 'ZEC',
        'name' => 'ZEC',
    ),
    array(
        'filter' => 'BAT',
        'name' => 'BAT',
    ),
    array(
        'filter' => 'USDC',
        'name' => 'USDC',
    ),
    array(
        'filter' => 'ZRX',
        'name' => 'ZRX',
    ),
    array(
        'filter' => 'BNB',
        'name' => 'BNB',
    ),
    array(
        'filter' => 'EOS',
        'name' => 'EOS',
    ),
    array(
        'filter' => 'XLM',
        'name' => 'XLM',
    ),
    array(
        'filter' => 'ADA',
        'name' => 'ADA',
    ),
);
?>




