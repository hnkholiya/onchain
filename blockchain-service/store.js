require('dotenv').config({
    path: __dirname + '/.env',
    quiet: true
});


const { ethers } = require('ethers');

const abi = require('./contractABI.json');

const provider = new ethers.JsonRpcProvider(
    process.env.RPC_URL
);

const wallet = new ethers.Wallet(
    process.env.PRIVATE_KEY,
    provider
);

const contract = new ethers.Contract(
    process.env.CONTRACT_ADDRESS,
    abi,
    wallet
);

async function store() {

    try {

        const uniqueId = process.argv[2];

        const hash = process.argv[3];

        const tx = await contract.storeDocument(
            uniqueId,
            hash
        );

        await tx.wait();

        process.stdout.write(tx.hash);

    } catch(error) {

        process.stdout.write("ERROR");
    }
}

store();