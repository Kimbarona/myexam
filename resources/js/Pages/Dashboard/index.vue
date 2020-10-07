<template>
    <Layout>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            This is Dashboard, welcome {{ fname }}, {{ lname }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../Shared/Layout';
export default {
    components:{
        Layout
    },
    props: ['fname', 'lname']
}
</script>
