require('dotenv').config({
    path: __dirname + '/.env',
    quiet: true
});

const { ethers } = require('ethers');

const abi = require('./contractABI.json');

const provider = new ethers.JsonRpcProvider(
    process.env.RPC_URL
);

const contract = new ethers.Contract(
    process.env.CONTRACT_ADDRESS,
    abi,
    provider
);

async function verify() {

    try {

        const uniqueId = process.argv[2];

        const result = await contract.verifyDocument(
            uniqueId
        );

        process.stdout.write(result);

    } catch(error) {

        process.stdout.write("ERROR");
    }
}

verify();