function formatToLKR(value) {
    const formatter = new Intl.NumberFormat("en-US", {
        style: "currency",
        currency: "LKR",
        minimumFractionDigits: 2,
        currencyDisplay: "narrowSymbol",
    });

    return formatter.format(value).replace("Rs.", "LKR");
}
