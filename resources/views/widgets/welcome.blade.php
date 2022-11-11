<div class="card p-2 content timer" x-data="timer(when.getTime())" x-init="init()">
    👋 &nbsp; Welcome to the Statamic Demo site! Go bananas with it because it will reset in:
    <div class="inline-block px-sm bg-yellow">
        <span x-text="time().minutes"></span>:<span x-text="time().seconds"></span>
    </div>
</div>

<script>
    var when = new Date();
    when.setMinutes(Math.ceil(when.getMinutes() / 30) * 30);

    function timer(expiry) {
        return {
            expiry: expiry,
            remaining:null,
            init() {
                this.setRemaining()
                setInterval(() => {
                    this.setRemaining();
                }, 1000);
            },
            setRemaining() {
                const diff = this.expiry - new Date().getTime();
                this.remaining = parseInt(diff / 1000);
            },
            days() {
                return {
                    value:this.remaining / 86400,
                    remaining:this.remaining % 86400
                };
            },
            hours() {
                return {
                    value:this.days().remaining / 3600,
                    remaining:this.days().remaining % 3600
                };
            },
            minutes() {
                return {
                    value:this.hours().remaining / 60,
                    remaining:this.hours().remaining % 60
                };
            },
            seconds() {
                return {
                    value:this.minutes().remaining,
                };
            },
            format(value) {
                return ("0" + parseInt(value)).slice(-2)
            },
            time(){
                return {
                    days:this.format(this.days().value),
                    hours:this.format(this.hours().value),
                    minutes:this.format(this.minutes().value),
                    seconds:this.format(this.seconds().value),
                }
            },
        }
    }
</script>
