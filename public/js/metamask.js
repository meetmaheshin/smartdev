const minABI = [
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "uint256",
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
				"indexed": false,
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "Paused",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"indexed": true,
				"internalType": "bytes32",
				"name": "previousAdminRole",
				"type": "bytes32"
			},
			{
				"indexed": true,
				"internalType": "bytes32",
				"name": "newAdminRole",
				"type": "bytes32"
			}
		],
		"name": "RoleAdminChanged",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "account",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "sender",
				"type": "address"
			}
		],
		"name": "RoleGranted",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "account",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "sender",
				"type": "address"
			}
		],
		"name": "RoleRevoked",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "Unpaused",
		"type": "event"
	},
	{
		"inputs": [],
		"name": "DEFAULT_ADMIN_ROLE",
		"outputs": [
			{
				"internalType": "bytes32",
				"name": "",
				"type": "bytes32"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "MINTER_ROLE",
		"outputs": [
			{
				"internalType": "bytes32",
				"name": "",
				"type": "bytes32"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "PAUSER_ROLE",
		"outputs": [
			{
				"internalType": "bytes32",
				"name": "",
				"type": "bytes32"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			}
		],
		"name": "allowance",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "approve",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "burn",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "burnFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "decimals",
		"outputs": [
			{
				"internalType": "uint8",
				"name": "",
				"type": "uint8"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "subtractedValue",
				"type": "uint256"
			}
		],
		"name": "decreaseAllowance",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			}
		],
		"name": "getRoleAdmin",
		"outputs": [
			{
				"internalType": "bytes32",
				"name": "",
				"type": "bytes32"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"internalType": "uint256",
				"name": "index",
				"type": "uint256"
			}
		],
		"name": "getRoleMember",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			}
		],
		"name": "getRoleMemberCount",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "grantRole",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "hasRole",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "addedValue",
				"type": "uint256"
			}
		],
		"name": "increaseAllowance",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "initialize",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "toAccount",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "mint",
		"outputs": [
			{
				"internalType": "bool",
				"name": "success",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "name",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "pause",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "paused",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "renounceRole",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "role",
				"type": "bytes32"
			},
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "revokeRole",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes4",
				"name": "interfaceId",
				"type": "bytes4"
			}
		],
		"name": "supportsInterface",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "symbol",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "totalSupply",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "transfer",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "transferFrom",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "unpause",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	}
]



window.onload = (event) => {
	isConnected();   
 };		
async function isConnected() {
	const accounts = await window.ethereum.request({method: 'eth_accounts'});       
	if (accounts.length) {
	console.log(`You're connected to: ${accounts[0]}`);
	} else {
	document.getElementById('buy_tokens_card').style.display = "";
	}
}
const App = {
  web3: null,
  account: null,
  contract: null,
  contractdev3: null,
  contractusdt: null,

  start: async function() {
    const { web3 } = this
	const onboardButton = document.getElementById('connectButton');
	const buyToken 		= document.getElementById('buy_tokens_card');
	const installWrap 	= document.getElementById('install_wrap');
	const onboarding    = new MetamaskOnboarding()

    try {
      	if (typeof window.ethereum !== 'undefined') {
			ethereum.request({ method: 'eth_requestAccounts' });
			onboardButton.style.display = "none";
			buyToken.style.display = "";
			installWrap.style.display = "none";
		} else {
				installWrap.style.display = "";
				buyToken.style.display = "none";
				onboardButton.style.display = "";
				onboardButton.innerText = 'Install MetaMask!';
				onboardButton.disabled = false;
				onboardButton.onclick = () => {
					onboardButton.innerText = 'Onboarding in progress';
					onboardButton.disabled = true;
					onboarding.startOnboarding();
				};
		}
      /* Get the network we are connected to and then read the build/contracts/Voting.json and instantiate a contract object to use
      */

      // get accounts
      this.contract = new web3.eth.Contract(minABI, rovi_contract_address);
      this.contractdev3 = new web3.eth.Contract(minABI, dev_contract_address);
      this.contractusdt = new web3.eth.Contract(minABI, usdt_contract_address);
      const accounts = await web3.eth.getAccounts();
      this.account = accounts[0];
    } catch (error) {
      console.error("Could not connect to contract or chain."+error);
    }
  },


  transferCoins: async function() {
    const from = this.account;
    const _to = To_Address;
    var contract_r = this.contract;
    var tokensToTransfer = $('#addNumberOfToken').val() ;
    var devTokenToTransfer = 0 ;
    var usdtTokenToTransfer = 0 ;
    var url = $('.rovitokenButton').attr('data-href');
    var url_tx = $('.rovitokenButton').attr('data-href-tx');
	var coin = 'ROVI';
	transaction(coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,contract_r,from,_to,url,url_tx)
    
  },
  transferDev3:async function() {
	const from = this.account;
    const _to =To_Address;
    var contract_r = this.contractdev3;
    var tokensToTransfer = 0 ;
	var devTokenToTransfer =  $('#addDev3token').val()  ;
    var usdtTokenToTransfer = 0 ;
    var url = $('.dev3tokenButton').attr('data-href');
	var url_tx = $('.dev3tokenButton').attr('data-href-tx');
	var coin = 'Dev3';
	transaction(coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,contract_r,from,_to,url,url_tx)
  },
  transferUsdt:async function() {
	const from = this.account;
    const _to = To_Address;
    var contract_r = this.contractusdt;
    var tokensToTransfer = 0 ;
	var devTokenToTransfer =  0 ;
    var usdtTokenToTransfer = $('#addUsdttoken').val() ;
    var url = $('.usdttokenButton').attr('data-href');
	var url_tx = $('.usdttokenButton').attr('data-href-tx');
	var coin = 'USDT';
	transaction(coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,contract_r,from,_to,url,url_tx)
  },

};

window.App = App;


async function transaction(coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,contract_r,from,_to,url,url_tx){
	if(coin == 'ROVI'){
		var transactionAction = '1';
		var res_pay_add = BigInt(tokensToTransfer*1000000000000000000);
		var tokens = tokensToTransfer;
		var image = '/images/rovi-coin.png';
		var CONTRACT_ADDRESS = rovi_contract_address;
		var web3 = new Web3(bsc_rpc_url);
		var selectedchainId = BSC_chain_id;
		var rpc_url = bsc_rpc_url;
		var chainName = 'Smart Chain';
		var symbol = 'BNB';
		var decimals = 18;
	}else if(coin == 'Dev3'){
		var transactionAction = '2';
		var res_pay_add = BigInt(devTokenToTransfer*1000000000000000000);
		var tokens = devTokenToTransfer;
		var image = '/images/dev3dao_fav_icon.png';
		var CONTRACT_ADDRESS = dev_contract_address;
		var web3 = new Web3(poloygon_rpc_url);
		var selectedchainId = POLYGON_chain_id;
		var rpc_url = poloygon_rpc_url;
		var chainName = 'Polygon Matic';
		var symbol = 'MATIC';
		var decimals = 18;

	}else if(coin == 'USDT'){
		var transactionAction = '3';
		var res_pay_add = BigInt(usdtTokenToTransfer*1000000);
		var tokens = usdtTokenToTransfer;
		var image = '/images/usdt_icon.png';
		var CONTRACT_ADDRESS = usdt_contract_address;
		var web3 = new Web3(ethereum_rpc_url);
		var selectedchainId = ETHEREUM_chain_id;
		var rpc_url = ethereum_rpc_url;
		var chainName = 'Ethereum Network';
		var symbol = 'USDT';
		var decimals = 18;

	}
	Swal.fire({
		iconHtml: '<img class="object-fit-cover" src="'+image+'" width="100" height="100" alt="">',
        text: "You will have to pay around "+tokens + coin+" + gas fee",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Load '+coin
      }).then(async(result) => {
        if (result.isConfirmed) {
          Swal.fire({
            iconHtml: '<img class="object-fit-cover" src="'+image+'" width="100" height="100" alt="">',
            title:'Loading...',
            text: 'Please wait, the transaction is in the process!',
            showConfirmButton: false,
            allowOutsideClick: false
          });

		  if(window.ethereum.request({method: 'eth_requestAccounts'})){
			const accounts =   await ethereum.request({ method: 'eth_requestAccounts' });
			const address = accounts[0];
			const chainId = await ethereum.request({ method: 'eth_chainId' });
			console.log("chainID",chainId);
			console.log("selectedchainId",selectedchainId);


			if (chainId != selectedchainId) {
				try {
				  // check if the chain to connect to is installed
				  await window.ethereum.request({
					  method: 'wallet_switchEthereumChain',
					  params: [{ chainId: selectedchainId }], // chainId must be in hexadecimal numbers
				  });
				}catch (error) {
				  if (error.code === 4902) {
					try {
						await window.ethereum.request({
						  method: 'wallet_addEthereumChain',
						  params: [
							{
							  chainId: selectedchainId,
							  rpcUrls: [rpc_url],
							  chainName: chainName,
							  nativeCurrency: {
								  name: chainName,
								  symbol:symbol, // 2-6 characters long
								  decimals: decimals
							  },
							//   blockExplorerUrls: [rpc_url],
	  
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





			const tx = {
			  from: address,
			  to: CONTRACT_ADDRESS,
			  chainId: chainId,
			  data: contract_r.methods.transfer(_to,web3.utils.toHex(res_pay_add.toString())).encodeABI()
			}
			const txHash =  await window.ethereum.request({
			  method: 'eth_sendTransaction',
			  params: [tx]
			})
			.catch((error) => {
				console.log("error",error.code);
			  if (error.code === 4001) {
				  swal.close();
			  }
			});

			// start
			jQuery.ajax({
			  type: "post",
			  dataType : "json",
			  url: url,
			  data : {txHash:txHash,rovi_amount:tokensToTransfer, dev3_amount:devTokenToTransfer, usdt_amount:usdtTokenToTransfer,action:'credit', transaction_action:transactionAction,from_wallet: from,to_wallet:_to,status:0},
			  success: async function(response){
					  console.log("result is:",response);
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
			// await check_transactions_status(txHash,coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,url_tx)

			const intervalId = setInterval(async()=>{
			  check_transactions_status(txHash,coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,url_tx)
			}, 1000);
		  }else {
			console.log('user must connect wallet');
		  }

        }
      });
}
 async function check_transactions_status(hash,coin,tokensToTransfer,devTokenToTransfer,usdtTokenToTransfer,url_tx){
	if (hash) {
	  if(coin == 'ROVI'){
		  var transactionAction = 1;
		  var url = bsc_rpc_url;
	  }else if(coin == 'Dev3'){
		  var transactionAction = 2;
		  var url = poloygon_rpc_url;
	  }else if(coin == 'USDT'){
		  var transactionAction = 3;
		  var url = ethereum_rpc_url;
	  }
	  console.log("hash",hash);
	  console.log("url",url);

	  const web3 = new Web3(url);
		 web3.eth.getTransactionReceipt(hash, function (error, transaction) {
			console.log("error",error);
			console.log("transaction",transaction);

		  if (transaction){
			console.log("status",transaction.status);

			Swal.close();
			if (transaction.status == true) {
			  Swal.fire({
				icon: 'success',
				text: 'Transaction success!',
				showConfirmButton: false,
				timer: 5000,
				allowOutsideClick: false
			  }).then((result) => {
				 window.location.href = '/freelancer/setting/plans/tokens/buy';
				
			  });
			}
			if (transaction.status == false) {
			  Swal.fire({
				icon: 'error',
				text: 'transaction failed !',
				timer: 5000,
				showConfirmButton: false,
				allowOutsideClick: false
			  }).then((result) => {
				//   window.location.href = '/freelancer/setting/plans/tokens/buy';
			  });
			}
			jQuery.ajax({
			  type: "post",
			  dataType : "json",
			  url: url_tx,
			  data : {transaction_action: transactionAction, status:1, hash:hash,rovi_amount:tokensToTransfer, dev3_amount:devTokenToTransfer, usdt_amount:usdtTokenToTransfer},
			  success: async function(response){
				console.log('dfdsf');
			  }
			});
		  }
		 
		});
	}
	
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