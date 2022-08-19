<x-stat-layout
    name="Totals"
    :stat="(new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($revenue / 100, 'USD')"
/>
