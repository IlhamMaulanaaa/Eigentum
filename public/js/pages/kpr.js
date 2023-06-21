function showAlert() {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("alertBox").style.display = "block";
}

function closeAlert() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById("alertBox").style.display = "none";
}



const loanAmountInput = document.querySelector(".loan-amount");
const interestRateInput = document.querySelector(".interest-rate");
const loanTenureInput = document.querySelector(".loan-tenure");

const loanEMIValue = document.querySelector(".loan-emi .value");
const totalInterestValue = document.querySelector(".total-interest .value");
const totalAmountValue = document.querySelector(".total-amount .value");

const calculateBtn = document.querySelector(".calculate-btn");

let loanAmount = parseFloat(loanAmountInput.value.replace(/\./g, "").replace(",", "."));
let interestRate = parseFloat(interestRateInput.value);
let loanTenure = parseFloat(loanTenureInput.value);

let interest = interestRate / 12 / 100;

let myChart;

const checkValues = () => {
let loanAmountValue = loanAmountInput.value.replace(/\./g, "").replace(",", ".");
let interestRateValue = interestRateInput.value;
let loanTenureValue = loanTenureInput.value;

let regexNumber = /^[0-9]+$/;
if (!loanAmountValue.match(regexNumber)) {
  loanAmountInput.value = "10.000,00";
}

if (!loanTenureValue.match(regexNumber)) {
  loanTenureInput.value = "12";
}

let regexDecimalNumber = /^(\d*\.)?\d+$/;
if (!interestRateValue.match(regexDecimalNumber)) {
  interestRateInput.value = "7.5";
}
};

const displayChart = (totalInterestPayableValue) => {
const ctx = document.getElementById("myChart").getContext("2d");
myChart = new Chart(ctx, {
  type: "pie",
  data: {
  labels: ["Total Bunga", "Bunga Yang Dibayar"],
  datasets: [
      {
      data: [totalInterestPayableValue, loanAmount],
      backgroundColor: ["#aaa", "#0C40E8"],
      borderWidth: 0,
      },
  ],
  },
});
};

const updateChart = (totalInterestPayableValue) => {
myChart.data.datasets[0].data[0] = totalInterestPayableValue;
myChart.data.datasets[0].data[1] = loanAmount;
myChart.update();
};

const refreshInputValues = () => {
loanAmount = parseFloat(loanAmountInput.value.replace(/\./g, "").replace(",", "."));
interestRate = parseFloat(interestRateInput.value);
loanTenure = parseFloat(loanTenureInput.value);
interest = interestRate / 12 / 100;
};

const formatRupiah = (angka) => {
return angka.toLocaleString("id-ID", {
  style: "currency",
  currency: "IDR",
  minimumFractionDigits: 2,
});
};

const calculateEMI = () => {
checkValues();
refreshInputValues();
let emi =
  loanAmount *
  interest *
  (Math.pow(1 + interest, loanTenure) /
  (Math.pow(1 + interest, loanTenure) - 1));

return emi;
};

const updateData = (emi) => {
loanEMIValue.innerHTML = formatRupiah(Math.round(emi));

let totalAmount = Math.round(loanTenure * emi);
totalAmountValue.innerHTML = formatRupiah(totalAmount);

let totalInterestPayable = Math.round(totalAmount - loanAmount);
totalInterestValue.innerHTML = formatRupiah(totalInterestPayable);

if (myChart) {
  updateChart(totalInterestPayable);
} else {
  displayChart(totalInterestPayable);
}
};

const init = () => {
let emi = calculateEMI();
updateData(emi);
};

init();

calculateBtn.addEventListener("click", init);