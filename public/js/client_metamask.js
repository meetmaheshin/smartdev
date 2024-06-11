const usdtABI=[
  {
    "constant": true,
    "inputs": [],
    "name": "name",
    "outputs": [
      {
        "name": "",
        "type": "string"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_upgradedAddress",
        "type": "address"
      }
    ],
    "name": "deprecate",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_spender",
        "type": "address"
      },
      {
        "name": "_value",
        "type": "uint256"
      }
    ],
    "name": "approve",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "deprecated",
    "outputs": [
      {
        "name": "",
        "type": "bool"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_evilUser",
        "type": "address"
      }
    ],
    "name": "addBlackList",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "totalSupply",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_from",
        "type": "address"
      },
      {
        "name": "_to",
        "type": "address"
      },
      {
        "name": "_value",
        "type": "uint256"
      }
    ],
    "name": "transferFrom",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "upgradedAddress",
    "outputs": [
      {
        "name": "",
        "type": "address"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "name": "",
        "type": "address"
      }
    ],
    "name": "balances",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "decimals",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "maximumFee",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "_totalSupply",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [],
    "name": "unpause",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "name": "_maker",
        "type": "address"
      }
    ],
    "name": "getBlackListStatus",
    "outputs": [
      {
        "name": "",
        "type": "bool"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "name": "",
        "type": "address"
      },
      {
        "name": "",
        "type": "address"
      }
    ],
    "name": "allowed",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "paused",
    "outputs": [
      {
        "name": "",
        "type": "bool"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "name": "who",
        "type": "address"
      }
    ],
    "name": "balanceOf",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [],
    "name": "pause",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "getOwner",
    "outputs": [
      {
        "name": "",
        "type": "address"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "owner",
    "outputs": [
      {
        "name": "",
        "type": "address"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "symbol",
    "outputs": [
      {
        "name": "",
        "type": "string"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_to",
        "type": "address"
      },
      {
        "name": "_value",
        "type": "uint256"
      }
    ],
    "name": "transfer",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "newBasisPoints",
        "type": "uint256"
      },
      {
        "name": "newMaxFee",
        "type": "uint256"
      }
    ],
    "name": "setParams",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "amount",
        "type": "uint256"
      }
    ],
    "name": "issue",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "amount",
        "type": "uint256"
      }
    ],
    "name": "redeem",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "name": "_owner",
        "type": "address"
      },
      {
        "name": "_spender",
        "type": "address"
      }
    ],
    "name": "allowance",
    "outputs": [
      {
        "name": "remaining",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "basisPointsRate",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [
      {
        "name": "",
        "type": "address"
      }
    ],
    "name": "isBlackListed",
    "outputs": [
      {
        "name": "",
        "type": "bool"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_clearedUser",
        "type": "address"
      }
    ],
    "name": "removeBlackList",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": true,
    "inputs": [],
    "name": "MAX_UINT",
    "outputs": [
      {
        "name": "",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "view",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "newOwner",
        "type": "address"
      }
    ],
    "name": "transferOwnership",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "constant": false,
    "inputs": [
      {
        "name": "_blackListedUser",
        "type": "address"
      }
    ],
    "name": "destroyBlackFunds",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "inputs": [
      {
        "name": "_initialSupply",
        "type": "uint256"
      },
      {
        "name": "_name",
        "type": "string"
      },
      {
        "name": "_symbol",
        "type": "string"
      },
      {
        "name": "_decimals",
        "type": "uint256"
      }
    ],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "constructor"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "amount",
        "type": "uint256"
      }
    ],
    "name": "Issue",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "amount",
        "type": "uint256"
      }
    ],
    "name": "Redeem",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "newAddress",
        "type": "address"
      }
    ],
    "name": "Deprecate",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "feeBasisPoints",
        "type": "uint256"
      },
      {
        "indexed": false,
        "name": "maxFee",
        "type": "uint256"
      }
    ],
    "name": "Params",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "_blackListedUser",
        "type": "address"
      },
      {
        "indexed": false,
        "name": "_balance",
        "type": "uint256"
      }
    ],
    "name": "DestroyedBlackFunds",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "_user",
        "type": "address"
      }
    ],
    "name": "AddedBlackList",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": false,
        "name": "_user",
        "type": "address"
      }
    ],
    "name": "RemovedBlackList",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": true,
        "name": "owner",
        "type": "address"
      },
      {
        "indexed": true,
        "name": "spender",
        "type": "address"
      },
      {
        "indexed": false,
        "name": "value",
        "type": "uint256"
      }
    ],
    "name": "Approval",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [
      {
        "indexed": true,
        "name": "from",
        "type": "address"
      },
      {
        "indexed": true,
        "name": "to",
        "type": "address"
      },
      {
        "indexed": false,
        "name": "value",
        "type": "uint256"
      }
    ],
    "name": "Transfer",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [],
    "name": "Pause",
    "type": "event"
  },
  {
    "anonymous": false,
    "inputs": [],
    "name": "Unpause",
    "type": "event"
  }
];

const escrowABI=[
  {
    "inputs":
    [
      {
        "internalType":"address",
        "name":"_buyer","type":"address"
      },
      {
        "internalType":"address","name":"_seller","type":"address"},{
        "internalType":"address","name":"_feeFundOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{
        "anonymous":false,"inputs":[{
        "indexed":false,"internalType":"uint64","name":"mileStonesId","type":"uint64"},{
        "indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"add","type":"event"},{
        "anonymous":false,"inputs":[{
        "indexed":false,"internalType":"uint64","name":"mileStonesId","type":"uint64"},{
        "indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"escrow","type":"event"},{
        "anonymous":false,"inputs":[{
        "indexed":true,"internalType":"uint64","name":"id","type":"uint64"},{
        "indexed":true,"internalType":"address","name":"byWhom","type":"address"}],"name":"noEvent","type":"event"},{
        "anonymous":false,"inputs":[{
        "indexed":true,"internalType":"uint64","name":"id","type":"uint64"},{
        "indexed":true,"internalType":"address","name":"receiver","type":"address"},{
        "indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{
        "indexed":true,"internalType":"string","name":"reason","type":"string"}],"name":"payFund","type":"event"},{
        "anonymous":false,"inputs":[{
        "indexed":false,"internalType":"uint64","name":"mileStonesId","type":"uint64"},{
        "indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"update","type":"event"},{
        "inputs":[{
        "internalType":"uint64","name":"id","type":"uint64"}],"name":"acceptMileStone","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"mileStonesId","type":"uint64"},{
        "internalType":"uint256","name":"amount","type":"uint256"}],"name":"addMilestone","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[{
        "internalType":"uint64[]","name":"mileStonesIds","type":"uint64[]"},{
        "internalType":"uint256[]","name":"amounts","type":"uint256[]"}],"name":"addMilestoneBulk","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[],"name":"arbiter","outputs":[{
        "internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"id","type":"uint64"},{
        "internalType":"address","name":"_addressToReleaseFunds","type":"address"}],"name":"arbiterYes","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"id","type":"uint64"}],"name":"autoPayForTimeOutAndNoResponseFromOther","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[],"name":"buyer","outputs":[{
        "internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"id","type":"uint64"}],"name":"cancelMileStone","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"id","type":"uint64"}],"name":"escrowMilestone","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"","type":"uint64"}],"name":"escrows","outputs":[{
        "internalType":"bool","name":"isCreated","type":"bool"},{
        "internalType":"uint256","name":"escrowFunds","type":"uint256"},{
        "internalType":"uint256","name":"lockedFunds","type":"uint256"},{
        "internalType":"uint256","name":"frozenFunds","type":"uint256"},{
        "internalType":"uint256","name":"frozenTime","type":"uint256"},{
        "internalType":"bool","name":"buyerNo","type":"bool"},{
        "internalType":"bool","name":"sellerNo","type":"bool"},{
        "internalType":"enum Escrow.State","name":"state","type":"uint8"}],"stateMutability":"view","type":"function"},{
        "inputs":[],"name":"feeFundOwner","outputs":[{
        "internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{
        "inputs":[],"name":"freezePeriod","outputs":[{
        "internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"id","type":"uint64"}],"name":"no","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[],"name":"owner","outputs":[{
        "internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{
        "inputs":[],"name":"seller","outputs":[{
        "internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{
        "inputs":[{
        "internalType":"address","name":"_arbiter","type":"address"}],"name":"setArbiter","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[{
        "internalType":"uint64","name":"mileStonesId","type":"uint64"},{
        "internalType":"uint256","name":"amount","type":"uint256"}],"name":"updateMilestoneAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{
        "inputs":[],"name":"usdtToken","outputs":[{
        "internalType":"contract IERC20","name":"","type":"address"}],"stateMutability":"view","type":"function"}
];

$(function () {
    $('#submit_tooltip').tooltip({trigger:'hover'})
});
const App = {
  web3: null,
  account: null,
  contractusdt: null,
  contractescrow:null,

  start: async function() {
    const { web3 } = this
    const onboardButton = document.getElementById('connectButton');
    const installWrap 	= document.getElementById('install_wrap');
    const fundContract 	= document.getElementById('fund_contract');
    const onboarding    = new MetamaskOnboarding()

    try {
      	if (typeof window.ethereum !== 'undefined') {
            ethereum.request({ method: 'eth_requestAccounts' });
            if ($(onboardButton).length) {
              onboardButton.style.display = "none";
            }
				
				if ($(fundContract).length) {
					fundContract.disabled = false;
				}
				if ($(installWrap).length) {
					
					installWrap.style.display = "none";
				}
				
		  }
       else {
          if ($(fundContract).length) {
            fundContract.disabled = true;
          }
          
          if ($(installWrap).length) {
            installWrap.style.display = "";
          }
            onboardButton.style.display = "";
            onboardButton.innerText = 'Install MetaMask!';
            onboardButton.disabled = false;
            
            onboardButton.onclick = () => {
              onboardButton.innerText = 'Onboarding in progress';
              onboardButton.disabled = true;
              onboarding.startOnboarding();
          };
		    }
      // get accounts
      this.contractusdt = new web3.eth.Contract(usdtABI, usdt_contract_address);
      this.contractescrow = new web3.eth.Contract(escrowABI,escrow_contract_address);
      const accounts = await web3.eth.getAccounts();
      this.account = accounts[0];
    } catch (error) {
        console.error("Could not connect to contract or chain."+error);
    }
  },

 
  fundContracts:async function(id){
    if (window.ethereum) {
      const currentChainId = await window.ethereum.request({
        method: 'eth_chainId',
      });
      // return true if network id is the same
      if (currentChainId != 0x13881) {
          try {
            // check if the chain to connect to is installed
            await window.ethereum.request({
                method: 'wallet_switchEthereumChain',
                params: [{ chainId: '0x13881' }], // chainId must be in hexadecimal numbers
            });
            window.ethereum.request({
                method: "eth_requestAccounts"
            }).then((accounts) => {
                $('#wallet_address').val(accounts[0]);
            }).catch((err) => console.log(err));
        
        }catch (error) {
            if (error.code === 4902) {
                try {
                  await window.ethereum.request({
                    method: 'wallet_addEthereumChain',
                    params: [
                      {
                        chainId: '0x13881',
                        rpcUrls: [poloygon_rpc_url],
                        chainName: "Polygon Testnet Mumbai",
                        nativeCurrency: {
                            name: 'Polygon Network',
                            symbol:'MATIC', // 2-6 characters long
                            decimals: 6
                        },
                        blockExplorerUrls: ["https://mumbai.polygonscan.com/"],

                      },
                    ],
                  });
                } catch (addError) {
                  console.error(addError);
                }
            }
            console.log("Cannot switch to the network"+error);
        }
      }
    }
	  var contract_usdt = this.contractusdt;
	  var contract_escrow = this.contractescrow;
    var milestoneAmount = parseFloat($('#fund_contract_'+id).attr('data-amount'));
    var milestoneAmount = ((milestoneAmount*5)/100 ) + milestoneAmount
    var milestoneId = $('#fund_contract_'+id).attr('data-offer-id');
    Swal.fire({
		  iconHtml: '',
        text: "You will have to approve tokens " +milestoneAmount + " USDT",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Approve Tokens '
    }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire({
                title:'Loading...',
                text: 'Please wait, the transaction is in the process!',
                showConfirmButton: false,
                allowOutsideClick: false
              });
              
              escrowMilestones(milestoneAmount,milestoneId,contract_usdt,contract_escrow);
          }
    });
  },

  approve_work_pay_now:async function(){
    var contract_escrow = this.contractescrow;
      var milestoneId = $('.approve_work_pay_now').attr('data-id');
      Swal.fire({
          text: "Are you sure!! you want to Approve work",
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Pay Now '
      }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                  title:'Loading...',
                  text: 'Please wait, the transaction is in the process!',
                  showConfirmButton: false,
                  allowOutsideClick: false
                });
                approveWork(milestoneId,contract_escrow);
            }
      });
  }
};

window.App = App;


async function escrowMilestones(milestoneAmount,milestoneId,contract_usdt,contract_escrow){
    var approvedAmount = (milestoneAmount*1000000).toFixed(0);

    if(window.ethereum.request({method: 'eth_requestAccounts'})){
        const accounts =    await ethereum.request({ method: 'eth_requestAccounts' });
        const chainId = await ethereum.request({ method: 'eth_chainId' });
        const address = accounts[0];
        try {
          await contract_usdt.methods.approve(escrow_contract_address, approvedAmount).send({from: address});
          await contract_escrow.methods.escrowMilestone(milestoneId).send({from: address});
          await approveTokens(milestoneId);
          return true;
        } catch (error) {
          if (error.code === 4001) {
            swal.close();
            return false;
          } else {
            swal.close();
            Swal.fire({
              icon: 'error',
              text: 'Something went wrong' + error,
              showCancelButton: true,
              showConfirmButton: false,
            });
            return false;
          }
        }
    }else {
        console.log('user must connect wallet');
    }
}
function approveTokens(milestoneId){
    jQuery.ajax({
      type: "post",
      dataType : "json",
      url: '/client/payments/approve_tokens',
      data : {finish_project:1,status:3,milestoneId:milestoneId},
      success: async function(response){
          Swal.close();
                notify.setup({
                    title: true,
                    icon: true,
                    timeout: "3000",
                    position: "right",
                });
                notify.show("success", "Milestone Created Successfully"); 
                setTimeout(function () {
                  location.href = '/client/dashboard';
              }, 500);

      },
      error: function(error) {
          Swal.fire({
              icon: 'error',
              text: error,
              showCancelButton: true,
              showConfirmButton: false,
          });
      }
  });

}

async function approveWork(milestoneId,contract_escrow){
  if(window.ethereum.request({method: 'eth_requestAccounts'})){
    const accounts  =     await ethereum.request({ method: 'eth_requestAccounts' });
    const address   =     accounts[0];
    await contract_escrow.methods.acceptMileStone(milestoneId).send({ 
      from: address,
    }).then(result => {
      PaymentDone(milestoneId);
    }).catch(e=>{
        swal.close();
        Swal.fire({
          icon: 'error',
          text: 'Please check Again'+e,
          showCancelButton: true,
          showConfirmButton: false,
        });
        return false;
      })
  } else {
      console.log('user must connect wallet');
  }
}
function PaymentDone(milestoneId){
  jQuery.ajax({
    type: "post",
    dataType : "json",
    url: '/client/payments/payment_done/finish',
    data : {status:3,milestoneId:milestoneId},
    success: async function(response){
        Swal.close();
        socket.emit("sendNotification", {
            notifiable_id: response.notification.notifiable_id,
            message: response.notification,
        });
              notify.setup({
                  title: true,
                  icon: true,
                  timeout: "3000",
                  position: "right",
              });
              notify.show("success", "Payment Successfully Done"); 
              setTimeout(function () {
                location.href = '/client/all-jobs?statuses=all';
              }, 500);

    },
    error: function(error) {
        Swal.fire({
            icon: 'error',
            text: error,
            showCancelButton: true,
            showConfirmButton: false,
        });
    }
  });
}
window.addEventListener("load", async ()=> {
  if (window.ethereum) {
    // use MetaMask's provider
    App.web3 = new Web3(window.ethereum);
    await window.ethereum.enable(); // get permission to access accounts
	
  } else {
    console.warn(
      "No web3 detected. Falling back to http://127.0.0.1:8545. You should remove this fallback when you deploy live",
    );
    // fallback - use your fallback strategy (local node / hosted node + in-dapp id mgmt / fail)
    // App.web3 = new Web3(new Web3.providers.HttpProvider('https://mainnet.infura.io/v3/960c2f0d2ab84de8b1baa4c6d77a7f3d'));

    App.web3 = new Web3(
      new Web3.providers.HttpProvider("http://127.0.0.1:8545"),
    );
  }

  App.start();
});