if [ "$(id -u)" -ne 0 ]; then echo "Please run as root." >&2; exit 1; fi

CloudfarePKGLink="https://pkg.cloudflareclient.com/uploads/cloudflare_warp_2023_1_133_1_amd64_734c1ff709.deb"
CloudfarePKG="cloudflare_warp_2023_1_133_1_amd64_734c1ff709.deb"
# wget $CloudfarePKGLink
chmod +x $CloudfarePKG
sudo dpkg -i $CloudfarePKG
apt --fix-broken install
sudo apt install cloudflare-warp
warp-cli register
warp-cli connect
warp-cli enable-always-on
ip a